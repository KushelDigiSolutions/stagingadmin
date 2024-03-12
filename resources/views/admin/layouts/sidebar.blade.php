<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="{{ route('admin.dashboard') }}">
            <img alt="Logo" src="{{ asset('./logo.png') }}" class="yogi app-sidebar-logo-default" />
            <img alt="Logo" src="{{ asset('./small-logo.png') }}" class="h-20px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-states="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-states="true">
            <div class="menu menu-column menu-rounded menu-sub-indention" id="#kt_app_sidebar_menu" data-kt-menu="true"
                data-kt-menu-expand="false">

                <div data-kt-menu-trigger="click0" class="menu-item pro-hover here show menu-accordion">
                    <a href="{{ route('admin.dashboard') }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </span>
                    </a>
                </div>
                @canany(['user-list', 'user-create', 'user-edit', 'user-status-change', 'user-delete'])
                    <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), ['admin.users.index', 'admin.users.create', 'admin.users.edit'])) {{ 'is-active' }} @endif">
                        <a class="menu-link" href="{{ route('admin.users.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-user fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span class="menu-title">Admin Management</span>
                        </a>
                    </div>
                @endcanany
                @canany(['staff-list', 'staff-create', 'staff-edit', 'staff-status-change', 'staff-delete'])
                    <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), ['admin.staff.index', 'admin.staff.create', 'admin.staff.edit'])) {{ 'is-active' }} @endif">
                        <a class="menu-link" href="{{ route('admin.staff.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-user fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span class="menu-title">Staff Management</span>
                        </a>
                    </div>
                @endcanany
                @canany(['role-list', 'role-create', 'role-edit', 'role-delete'])
                    <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), ['admin.roles.index', 'admin.roles.create', 'admin.roles.edit'])) {{ 'is-active' }} @endif">
                        <a class="menu-link" href="{{ route('admin.roles.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-user fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span class="menu-title">Role Management</span>
                        </a>
                    </div>
                @endcanany
				
				
				
				@canany(['equipment-categories-list', 'equipment-categories-create', 'equipment-categories-edit',
                    'equipment-categories-delete', 'equipment-list', 'equipment-create', 'equipment-edit', 'equipment-delete'])
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if (in_array(Route::currentRouteName(), [
                        'admin.equipment.index',
                        'admin.equipment.create',
                        'admin.equipment.edit',
                        'admin.equipment.show',
                        'admin.equipment-categories.index',
                        'admin.equipment-categories.create',
                        'admin.equipment-categories.edit',
                        'admin.equipment-categories.show',
                    ])) {{ 'hover show' }} @endif">
                        <span class="menu-link pro-hover @if (in_array(Route::currentRouteName(), [
                                'admin.equipment.index',
                                'admin.equipment.create',
                                'admin.equipment.edit',
                                'admin.equipment.show',
                                'admin.equipment-categories.index',
                                'admin.equipment-categories.create',
                                'admin.equipment-categories.edit',
                                'admin.equipment-categories.show',
                            ])) {{ 'is-active' }} @endif ">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Manage Equipment Rentals</span>
                            <span class="menu-arrow"></span>
                        </span>
						
                        @canany(['equipment-categories-list', 'equipment-categories-create', 'equipment-categories-edit',
                            'equipment-categories-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.equipment-categories.index',
                                        'admin.equipment-categories.create',
                                        'admin.equipment-categories.edit',
                                        'admin.equipment-categories.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.equipment-categories.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
						 @canany(['equipment-amenities-list', 'equipment-amenities-create', 'equipment-amenities-edit',
                            'equipment-amenities-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.equipment-amenities.index',
                                        'admin.equipment-amenities.create',
                                        'admin.equipment-amenities.edit',
                                        'admin.equipment-amenities.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.equipment-amenities.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Amenities</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['equipment-list', 'equipment-create', 'equipment-edit', 'equipment-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div
                                    class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                            'admin.equipment.index',
                                            'admin.equipment.create',
                                            'admin.equipment.edit',
                                            'admin.equipment.show',
                                        ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.equipment.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Equipment Rentals</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endcanany
                @endcanany
				
				
				
				
				@canany(['lodging-categories-list', 'lodging-categories-create', 'lodging-categories-edit',
                    'lodging-categories-delete', 'lodging-list', 'lodging-create', 'lodging-edit', 'lodging-delete'])
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if (in_array(Route::currentRouteName(), [
                        'admin.lodging.index',
                        'admin.lodging.create',
                        'admin.lodging.edit',
                        'admin.lodging.show',
                        'admin.lodging-categories.index',
                        'admin.lodging-categories.create',
                        'admin.lodging-categories.edit',
                        'admin.lodging-categories.show',
                    ])) {{ 'hover show' }} @endif">
                        <span class="menu-link pro-hover @if (in_array(Route::currentRouteName(), [
                                'admin.lodging.index',
                                'admin.lodging.create',
                                'admin.lodging.edit',
                                'admin.lodging.show',
                                'admin.lodging-categories.index',
                                'admin.lodging-categories.create',
                                'admin.lodging-categories.edit',
                                'admin.lodging-categories.show',
                            ])) {{ 'is-active' }} @endif ">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Manage Lodging Rentals</span>
                            <span class="menu-arrow"></span>
                        </span>
						
                        @canany(['lodging-categories-list', 'lodging-categories-create', 'lodging-categories-edit',
                            'lodging-categories-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.lodging-categories.index',
                                        'admin.lodging-categories.create',
                                        'admin.lodging-categories.edit',
                                        'admin.lodging-categories.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.lodging-categories.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['amenities-list', 'amenities-create', 'amenities-edit',
                            'amenities-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.amenities.index',
                                        'admin.amenities.create',
                                        'admin.amenities.edit',
                                        'admin.amenities.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.amenities.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Amenities</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['states-list', 'states-create', 'states-edit',
                            'states-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.states.index',
                                        'admin.states.create',
                                        'admin.states.edit',
                                        'admin.states.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.states.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">States</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['features-list', 'features-create', 'features-edit',
                            'features-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.features.index',
                                        'admin.features.create',
                                        'admin.features.edit',
                                        'admin.features.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.features.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Features</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['lodging-list', 'lodging-create', 'lodging-edit', 'lodging-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div
                                    class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                            'admin.lodging.index',
                                            'admin.lodging.create',
                                            'admin.lodging.edit',
                                            'admin.lodging.show',
                                        ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.lodging.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Lodging Rentals</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endcanany
                @endcanany
				
				
				
				
				@canany(['vclasses-categories-list', 'vclasses-categories-create', 'vclasses-categories-edit',
                    'vclasses-categories-delete', 'vclasses-list', 'vclasses-create', 'vclasses-edit', 'vclasses-delete'])
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if (in_array(Route::currentRouteName(), [
                        'admin.vclasses.index',
                        'admin.vclasses.create',
                        'admin.vclasses.edit',
                        'admin.vclasses.show',
                        'admin.vclasses-categories.index',
                        'admin.vclasses-categories.create',
                        'admin.vclasses-categories.edit',
                        'admin.vclasses-categories.show',
                    ])) {{ 'hover show' }} @endif">
                        <span class="menu-link pro-hover @if (in_array(Route::currentRouteName(), [
                                'admin.vclasses.index',
                                'admin.vclasses.create',
                                'admin.vclasses.edit',
                                'admin.vclasses.show',
                                'admin.vclasses-categories.index',
                                'admin.vclasses-categories.create',
                                'admin.vclasses-categories.edit',
                                'admin.vclasses-categories.show',
                            ])) {{ 'is-active' }} @endif ">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Manage Classes</span>
                            <span class="menu-arrow"></span>
                        </span>
						
                        @canany(['vclasses-categories-list', 'vclasses-categories-create', 'vclasses-categories-edit',
                            'vclasses-categories-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.vclasses-categories.index',
                                        'admin.vclasses-categories.create',
                                        'admin.vclasses-categories.edit',
                                        'admin.vclasses-categories.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.vclasses-categories.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['vclasses-list', 'vclasses-create', 'vclasses-edit', 'vclasses-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div
                                    class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                            'admin.vclasses.index',
                                            'admin.vclasses.create',
                                            'admin.vclasses.edit',
                                            'admin.vclasses.show',
                                        ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.vclasses.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Classes</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endcanany
                @endcanany
				
				
				
				
                @canany(['event-categories-list', 'event-categories-create', 'event-categories-edit',
                    'event-categories-delete', 'event-list', 'event-create', 'event-edit', 'event-delete'])
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if (in_array(Route::currentRouteName(), [
                        'admin.events.index',
                        'admin.events.create',
                        'admin.events.edit',
                        'admin.events.show',
                        'admin.event-categories.index',
                        'admin.event-categories.create',
                        'admin.event-categories.edit',
                        'admin.event-categories.show',
                    ])) {{ 'hover show' }} @endif">
                        <span class="menu-link pro-hover @if (in_array(Route::currentRouteName(), [
                                'admin.events.index',
                                'admin.events.create',
                                'admin.events.edit',
                                'admin.events.show',
                                'admin.event-categories.index',
                                'admin.event-categories.create',
                                'admin.event-categories.edit',
                                'admin.event-categories.show',
                            ])) {{ 'is-active' }} @endif ">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Manage Events</span>
                            <span class="menu-arrow"></span>
                        </span>
                        @canany(['event-categories-list', 'event-categories-create', 'event-categories-edit',
                            'event-categories-delete'])
                            <div class="menu-sub menu-sub-accordion ">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.event-categories.index',
                                        'admin.event-categories.create',
                                        'admin.event-categories.edit',
                                        'admin.event-categories.show',
                                    ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.event-categories.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['event-list', 'event-create', 'event-edit', 'event-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div
                                    class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                            'admin.events.index',
                                            'admin.events.create',
                                            'admin.events.edit',
                                            'admin.events.show',
                                        ])) {{ 'is-active' }} @endif ">
                                    <a class="menu-link" href="{{ route('admin.events.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Events</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endcanany
                @endcanany
                @canany(['header-list', 'header-create', 'header-edit', 'header-delete', 'footer-list', 'footer-create',
                    'footer-edit', 'footer-delete', 'navigation-list', 'navigation-create', 'navigation-edit',
                    'navigation-delete'])
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if (in_array(Route::currentRouteName(), [
                        'admin.headers.index',
                        'admin.headers.create',
                        'admin.headers.edit',
                        'admin.footers.index',
                        'admin.footers.create',
                        'admin.footers.edit',
                        'admin.navigations.index',
                        'admin.navigations.create',
                        'admin.navigations.edit',
                        'admin.pages.index',
                        'admin.pages.create',
                        'admin.pages.edit',
                    ])) hover show @endif">

                        <span class="menu-link pro-hover @if (in_array(Route::currentRouteName(), [
                        'admin.headers.index',
                        'admin.headers.create',
                        'admin.headers.edit',
                        'admin.footers.index',
                        'admin.footers.create',
                        'admin.footers.edit',
                        'admin.navigations.index',
                        'admin.navigations.create',
                        'admin.navigations.edit',
                        'admin.pages.index',
                        'admin.pages.create',
                        'admin.pages.edit',
                            ])) is-active @endif">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Content Management</span>
                            <span class="menu-arrow"></span>
                        </span>
                        @canany(['header-list', 'header-create', 'header-edit', 'header-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), ['admin.headers.index', 'admin.headers.create', 'admin.headers.edit'])) is-active @endif">
                                    <a class="menu-link" href="{{ route('admin.headers.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Headers</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['footer-list', 'footer-create', 'footer-edit', 'footer-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), ['admin.footers.index', 'admin.footers.create' . 'admin.footers.edit'])) is-active @endif">
                                    <a class="menu-link" href="{{ route('admin.footers.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Footers</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['menu-list', 'menu-create', 'menu-edit', 'menu-delete'])
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                        'admin.navigations.index',
                                        'admin.navigations.create' , 'admin.navigations.edit',
                                    ])) is-active @endif">
                                    <a class="menu-link" href="{{ route('admin.navigations.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Menus</span>
                                    </a>
                                </div>
                            </div>
                        @endcanany
                        @canany(['pages-list', 'pages-create', 'pages-edit', 'pages-delete'])
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item pro-hover @if (in_array(Route::currentRouteName(), [
                                'admin.pages.index',
                                'admin.pages.create' , 'admin.pages.edit',
                            ])) is-active @endif">
                                <a class="menu-link" href="{{ route('admin.pages.index') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Pages</span>
                                </a>
                            </div>
                        </div>
                        @endcanany
                    </div>
                @endcanany
                {{-- <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-shop fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Manage Shops</span>
                    </a>
                </div>


                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-map fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Equipment Rentals</span>
                    </a>
                </div>

                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-chart fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Lodging Rentals</span>
                    </a>
                </div>

                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-basket fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Products</span>
                    </a>
                </div>
                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-call fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Classes</span>
                    </a>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Setting</span>
                    </div>
                </div>
                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-abstract-13 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Reports</span>
                    </a>
                </div>
                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-chart-simple fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Sales Summary</span>
                    </a>
                </div>
                <div class="menu-item pro-hover">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-setting fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">System Setting</span>
                    </a>
                </div> --}}

            </div>
        </div>
    </div>
</div>
