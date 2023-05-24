  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{route('admin.index')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{ asset('admin/assets/img/logo (1).png') }}" width="180">
              </span>
     
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item @if(Route::is('admin.index')) active @endif">
              <a href="{{route('admin.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">{{ __('dashboard') }}</div>
              </a>
            </li>


            <li class="menu-item @if(Route::is('admin.account') || Route::is('admin.register')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings"> {{ __('account_settings') }} </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('admin.account')}}" class="menu-link">
                  <i class='bx bxs-user-account menu-icon' ></i>
                    <div data-i18n="Account"> {{ __('account') }} </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('admin.register')}}" class="menu-link">
                  <i class='bx bx-book-add menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('add_admin') }}</div>
                  </a>
                </li>
                  @php
                      $id=auth()->id();
                      $admin=App\Models\User::find($id);
                  @endphp
                  @if($admin->superadmin === '1')


                  <li class="menu-item">
                      <a href="{{route('admin.all_admin')}}" class="menu-link">
                      <i class='bx bxs-happy menu-icon'></i>
                          <div data-i18n="Notifications">{{ __('all_admin') }}</div>
                      </a>
                  </li>

                      @endif
              </ul>
            </li>
            <li class="menu-item @if(Route::is('admin.brands') || Route::is('admin.product')) active @endif">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='bx bx-news menu-icon '></i> 
            <div data-i18n="Account Settings">{{ __('Products')}}</div>
          </a>
          <ul class="menu-sub">

        
             <li class="menu-item @if(Route::is('admin.brands')) active @endif ">
                <a href="{{route('admin.brands')}}" class="menu-link">
                  <i class='bx bx-news menu-icon '></i>  
                  <div data-i18n="Notifications"> {{ __('brands')}} </div>
                </a>
              </li>

              <li class="menu-item @if(Route::is('admin.product')) active @endif ">
                <a href="{{route('admin.product')}}" class="menu-link">
                <i class='bx bx-news menu-icon '></i> 
                  <div data-i18n="Notifications"> {{ __('product')}} </div>
                </a>
              </li>
          </ul>
       </li>
            <li class="menu-item @if(Route::is('admin.common')) active @endif ">
              <a href="{{route('admin.common')}}" class="menu-link">
                <i class="fa-solid fa-house menu-icon"></i>
                <div data-i18n="Notifications">{{ __('common')}}</div>
              </a>
            </li>

            <li class="menu-item @if(Route::is('admin.about')) active @endif ">
              <a href="{{route('admin.about')}}" class="menu-link">
              <i class='bx bx-purchase-tag-alt menu-icon'></i>
                <div data-i18n="Notifications">{{ __('about')}}</div>
              </a>
            </li>

            <li class="menu-item @if(Route::is('admin.attribute')) active @endif ">
              <a href="{{route('admin.attribute')}}" class="menu-link">
                <i class='bx bx-news menu-icon '></i> 
                <div data-i18n="Notifications">{{ __('attribute')}}</div>
              </a>
            </li>
    
            
            <li class="menu-item @if(Route::is('admin.slider')) active @endif ">
              <a href="{{route('admin.slider')}}" class="menu-link">
                <i class="fa-sharp fa-solid fa-image menu-icon"></i>
                <div data-i18n="Notifications">{{ __('slider')}}</div>
              </a>
            </li>

           
            <li class="menu-item @if(Route::is('admin.form_message')) active @endif ">
              <a href="{{route('admin.form_message')}}" class="menu-link">
                <i class="fa-solid fa-circle-plus menu-icon"></i>
                <div data-i18n="Notifications">{{ __('form_message')}}</div>
              </a>
            </li>

            <li class="menu-item @if(Route::is('admin.subcribe_message')) active @endif ">
              <a href="{{route('admin.subcribe_message')}}" class="menu-link">
                <i class="fa-solid fa-circle-plus menu-icon"></i>
                <div data-i18n="Notifications">{{ __('subcribe_message')}}</div>
              </a>
            </li>

            <li class="menu-item @if(Route::is('admin.client')) active @endif ">
              <a href="{{route('admin.client')}}" class="menu-link">
              <i class='bx bx-purchase-tag-alt menu-icon'></i>
                <div data-i18n="Notifications">{{ __('client')}}</div>
              </a>
            </li> 

            <li class="menu-item @if(Route::is('admin.contact')) active @endif ">
              <a href="{{route('admin.contact')}}" class="menu-link">
                <i class="fa-sharp fa-solid fa-phone menu-icon"></i>
                <div data-i18n="Notifications">{{ __('contact')}}</div>
              </a>
            </li>

            
            <li class="menu-item @if(Route::is('admin.meta_tags')) active @endif ">
              <a href="{{route('admin.meta_tags')}}" class="menu-link">
                <i class="fa-solid fa-circle-plus menu-icon"></i>
                <div data-i18n="Notifications">{{ __('meta_tags')}}</div>
              </a>
            </li>

         

            <li class="menu-item @if(Route::is('admin.language')) active @endif">
              <a href="{{route('admin.language')}}" class="menu-link">
              <i class='bx bx-flag menu-icon'></i>
                <div data-i18n="Notifications">{{ __('language')}} </div>
              </a>
      </li>



          <li class="menu-item @if(Route::is('admin.tags') || Route::is('admin.blog')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-news menu-icon '></i> 
                <div data-i18n="Account Settings">{{ __('blog')}}</div>
              </a>
              <ul class="menu-sub">

              <li class="menu-item @if(Route::is('admin.tags')) active @endif ">
                  <a href="{{route('admin.tags')}}" class="menu-link">
                  <i class='bx bx-purchase-tag-alt menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('tags')}}</div>
                  </a>
                </li>
                <li class="menu-item @if(Route::is('admin.blog')) active @endif ">
                  <a href="{{route('admin.blog')}}" class="menu-link">
                  <i class='bx bx-news menu-icon '></i> 
                    <div data-i18n="Notifications"> {{ __('blog')}} </div>
                  </a>
                </li>
          </ul>
        </li>

        <li class="menu-item @if(Route::is('admin.video') || Route::is('admin.images')) active @endif">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='bx bx-news menu-icon '></i> 
            <div data-i18n="Account Settings">{{ __('portfolio')}}</div>
          </a>
          <ul class="menu-sub">

          <li class="menu-item @if(Route::is('admin.video')) active @endif ">
              <a href="{{route('admin.video')}}" class="menu-link">
              <i class='bx bx-purchase-tag-alt menu-icon'></i>
                <div data-i18n="Notifications">{{ __('video')}}</div>
              </a>
            </li>
            <li class="menu-item @if(Route::is('admin.images')) active @endif ">
              <a href="{{route('admin.images')}}" class="menu-link">
              <i class='bx bx-news menu-icon '></i> 
                <div data-i18n="Notifications"> {{ __('images')}} </div>
              </a>
            </li>
          </ul>
       </li>

     






     

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
