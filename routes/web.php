<?php

use App\Http\Middleware\TenantResolver;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Company Builder SaaS Routes Configuration
|--------------------------------------------------------------------------
*/

// 1. SaaS Platform Primary Public Landing Page
Route::get('/', function () {
    return view('saas.landing');
})->name('saas.landing');

// 2. Authentication UI Routes (Light Mode Clean Auth)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// 3. Customer Dashboard Routes (Tenant Owner Control Panel)
Route::prefix('customer')->group(function () {
    Route::get('/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');

    Route::get('/builder', function () {
        return view('customer.section-builder');
    })->name('customer.builder');

    Route::get('/profile', function () {
        return view('customer.profile');
    })->name('customer.profile');

    Route::get('/themes', function () {
        return view('customer.themes');
    })->name('customer.themes');

    Route::get('/content', function () {
        return view('customer.content');
    })->name('customer.content');

    Route::get('/seo', function () {
        return view('customer.seo');
    })->name('customer.seo');

    Route::get('/subscription', function () {
        return view('customer.subscription');
    })->name('customer.subscription');
});

// 4. Super Admin Dashboard Portal Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/tenants', function () {
        return view('admin.tenants');
    })->name('admin.tenants');

    Route::get('/plans', function () {
        return view('admin.plans');
    })->name('admin.plans');

    Route::get('/themes', function () {
        return view('admin.themes');
    })->name('admin.themes');

    Route::get('/tickets', function () {
        return view('admin.tickets');
    })->name('admin.tickets');
});

// 5. Dynamic Tenant Public Website Routes (Path-based Tenancy: /company-slug)
Route::middleware([TenantResolver::class])->group(function () {
    Route::get('/{tenant_slug}', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.home', compact('tenant'));
    })->name('tenant.home');

    Route::get('/{tenant_slug}/about', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.about', compact('tenant'));
    })->name('tenant.about');

    Route::get('/{tenant_slug}/services', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.services', compact('tenant'));
    })->name('tenant.services');

    Route::get('/{tenant_slug}/products', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.products', compact('tenant'));
    })->name('tenant.products');

    Route::get('/{tenant_slug}/portfolio', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.portfolio', compact('tenant'));
    })->name('tenant.portfolio');

    Route::get('/{tenant_slug}/gallery', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.gallery', compact('tenant'));
    })->name('tenant.gallery');

    Route::get('/{tenant_slug}/blog', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.blog', compact('tenant'));
    })->name('tenant.blog');

    Route::get('/{tenant_slug}/team', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.team', compact('tenant'));
    })->name('tenant.team');

    Route::get('/{tenant_slug}/faq', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.faq', compact('tenant'));
    })->name('tenant.faq');

    Route::get('/{tenant_slug}/contact', function () {
        $tenant = request()->get('tenant');
        return view('tenant.pages.contact', compact('tenant'));
    })->name('tenant.contact');
});
