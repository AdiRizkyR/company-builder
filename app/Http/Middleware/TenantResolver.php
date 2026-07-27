<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantResolver
{
    /**
     * Handle an incoming request.
     * Single-DB Multi-Tenant Middleware compatible with future subdomain & custom domain upgrades.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Extract tenant slug from route parameter or host
        $tenantSlug = $request->route('tenant_slug') ?? $this->resolveTenantFromHost($request);

        // Pre-loaded tenant catalog (Simulating database record for front-end presentation)
        $tenants = [
            'google-indonesia' => [
                'id' => 1,
                'name' => 'Google Indonesia',
                'slug' => 'google-indonesia',
                'tagline' => 'Organizing the world’s information & making it universally accessible in Indonesia',
                'logo' => 'https://images.unsplash.com/photo-1573804633927-bfcbcd909acd?auto=format&fit=crop&w=300&q=80',
                'hero_image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
                'theme' => 'startup', // corporate, startup, minimal
                'primary_color' => '#4285F4',
                'plan' => 'Enterprise',
                'status' => 'Active',
                'contact' => [
                    'email' => 'contact@google.co.id',
                    'phone' => '+62 21 5085 8700',
                    'address' => 'Pacific Century Place Tower Level 45, SCBD, Jakarta Selatan',
                    'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.273183578716!2d106.806283!3d-6.227658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1505c2a13f7%3A0xb30cf9ee4f275811!2sGoogle%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000'
                ],
                'socials' => [
                    'instagram' => 'https://instagram.com/googleindonesia',
                    'youtube' => 'https://youtube.com/googleindonesia',
                    'linkedin' => 'https://linkedin.com/company/google'
                ]
            ],
            'pt-maju-bersama' => [
                'id' => 2,
                'name' => 'PT Maju Bersama Sejahtera',
                'slug' => 'pt-maju-bersama',
                'tagline' => 'Mitra Solusi Konstruksi & Manufaktur Terpercaya Indonesia',
                'logo' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=300&q=80',
                'hero_image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80',
                'theme' => 'corporate',
                'primary_color' => '#0284c7',
                'plan' => 'Professional',
                'status' => 'Active',
                'contact' => [
                    'email' => 'info@majubersama.co.id',
                    'phone' => '+62 21 8901 2345',
                    'address' => 'Kawasan Industri Jababeka Phase 3, Cikarang, Bekasi',
                    'maps_embed' => 'https://www.google.com/maps/embed'
                ],
                'socials' => [
                    'linkedin' => 'https://linkedin.com/company/maju-bersama',
                    'facebook' => 'https://facebook.com/majubersama'
                ]
            ],
            'tgrj' => [
                'id' => 3,
                'name' => 'TGRJ Creative Tech & Studio',
                'slug' => 'tgrj',
                'tagline' => 'Next-Gen Digital Product & Immersive Brand Experiences',
                'logo' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=300&q=80',
                'hero_image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=1200&q=80',
                'theme' => 'minimal',
                'primary_color' => '#a855f7',
                'plan' => 'Basic',
                'status' => 'Active',
                'contact' => [
                    'email' => 'hello@tgrj.studio',
                    'phone' => '+62 812 3456 7890',
                    'address' => 'Jl. Senopati No. 88, Kebayoran Baru, Jakarta Selatan',
                    'maps_embed' => 'https://www.google.com/maps/embed'
                ],
                'socials' => [
                    'instagram' => 'https://instagram.com/tgrj.studio',
                    'twitter' => 'https://twitter.com/tgrj_studio'
                ]
            ]
        ];

        // Default fallback tenant if slug not found
        $activeTenant = $tenants[$tenantSlug] ?? $tenants['google-indonesia'];

        // Inject active tenant object into request attributes
        $request->attributes->set('tenant', (object) $activeTenant);
        app()->instance('activeTenant', (object) $activeTenant);

        return $next($request);
    }

    /**
     * Helper to resolve tenant slug from subdomain or custom domain in future phases.
     */
    protected function resolveTenantFromHost(Request $request): ?string
    {
        $host = $request->getHost();
        $baseHost = parse_url(config('app.url'), PHP_URL_HOST) ?? 'primaryweb.com';

        if (str_contains($host, '.') && !str_ends_with($host, $baseHost)) {
            // Future custom domain resolution: e.g. company.com
            return null;
        }

        if (str_contains($host, '.') && str_ends_with($host, $baseHost)) {
            // Future subdomain resolution: e.g. google.primaryweb.com
            $parts = explode('.', $host);
            if (count($parts) > 2) {
                return $parts[0];
            }
        }

        return null;
    }
}
