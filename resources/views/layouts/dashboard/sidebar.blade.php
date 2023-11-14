<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
              alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, Jane</h2>
            <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
              Sign Out
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse"
              data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
              aria-label="Toggle navigation">
              <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item mb-2">
          <a href="{{ route('landingpage') }}" class="nav-link d-flex align-items-center justify-content-center">
            <span class="sidebar-icon">
              <img src="{{ asset('assets/images/icon/logo-BIENTI-WHITE.png')}}" width="150" height="150" id="logo-large" class="img-fluid" alt="">
            </span>
            {{-- <span class="mt-1 ms-1 sidebar-text">Volt Overview</span> --}}
          </a>
        </li>
        <li class="nav-item  active ">
          <a href="{{ route('dashboard')}}" class="nav-link">
            <span class="sidebar-icon">             
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9564 1C10.6458 1 9.37296 1.73521 8.36789 2.45579C7.67986 2.94907 6.98074 3.54334 6.40284 4.03456C6.13493 4.26228 5.89299 4.46793 5.69038 4.63103C5.67221 4.64565 5.65456 4.66091 5.63746 4.67677C5.23381 5.05111 4.87032 5.37352 4.53893 5.66561L4.40484 5.78371C4.12751 6.0279 3.86704 6.25725 3.63251 6.47373C3.08749 6.97683 2.61103 7.47368 2.25093 8.10204C1.53214 9.35632 1.39844 10.9355 1.39844 13.713C1.39844 15.8057 1.52004 17.4632 1.85585 18.7554C2.19845 20.0739 2.78335 21.0839 3.74819 21.7765C4.68112 22.4462 5.84918 22.7295 7.16645 22.8652C8.47396 23 10.0689 23 11.9357 23H12.0331C13.8999 23 15.4949 23 16.8024 22.8652C18.1197 22.7295 19.2878 22.4462 20.2207 21.7765C21.1855 21.0839 21.7704 20.0739 22.113 18.7554C22.4488 17.4632 22.5704 15.8057 22.5704 13.713C22.5704 10.9357 22.437 9.35645 21.7185 8.1022C21.3586 7.4738 20.8822 6.97693 20.3373 6.47379C20.1026 6.25708 19.8419 6.02753 19.5642 5.78306L19.4309 5.66563C19.0996 5.37353 18.7361 5.05112 18.3324 4.67677C18.3154 4.66096 18.2978 4.64575 18.2797 4.63117C18.0847 4.47418 17.8577 4.28287 17.608 4.07249C17.0123 3.57048 16.2876 2.95978 15.5625 2.44761C14.5451 1.72885 13.2628 1 11.9564 1ZM9.07617 15.1354C8.52389 15.1354 8.07617 15.5831 8.07617 16.1354C8.07617 16.6877 8.52389 17.1354 9.07617 17.1354H14.8912C15.4435 17.1354 15.8912 16.6877 15.8912 16.1354C15.8912 15.5831 15.4435 15.1354 14.8912 15.1354H9.07617Z" fill="#9FA9BC"/>
              </svg>  
            </span> 
            <span class="sidebar-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('comunity_data')}}" class="nav-link">
            <span class="sidebar-icon">            
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5915 15.2068C13.2805 15.2068 16.4335 15.7658 16.4335 17.9988C16.4335 20.2318 13.3015 20.8068 9.5915 20.8068C5.9015 20.8068 2.7495 20.2528 2.7495 18.0188C2.7495 15.7848 5.8805 15.2068 9.5915 15.2068Z" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59151 12.0198C7.16951 12.0198 5.20551 10.0568 5.20551 7.63482C5.20551 5.21282 7.16951 3.24982 9.59151 3.24982C12.0125 3.24982 13.9765 5.21282 13.9765 7.63482C13.9855 10.0478 12.0355 12.0108 9.62251 12.0198H9.59151Z" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16.4831 10.8816C18.0841 10.6566 19.3171 9.28259 19.3201 7.61959C19.3201 5.98059 18.1251 4.62059 16.5581 4.36359" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.5954 14.7322C20.1464 14.9632 21.2294 15.5072 21.2294 16.6272C21.2294 17.3982 20.7194 17.8982 19.8954 18.2112" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>  
            </span>
            <span class="sidebar-text">Community</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{route('instagram_data')}}" class="nav-link">
            <span class="sidebar-icon">             
              <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_291)">
                <path d="M9.5 1.71074C12.0383 1.71074 12.3389 1.72187 13.3371 1.76641C14.2648 1.80723 14.7658 1.96309 15.0998 2.09297C15.5414 2.26367 15.8605 2.47148 16.1908 2.80176C16.5248 3.13574 16.7289 3.45117 16.8996 3.89277C17.0295 4.22676 17.1854 4.73145 17.2262 5.65547C17.2707 6.65742 17.2818 6.95801 17.2818 9.49258C17.2818 12.0309 17.2707 12.3314 17.2262 13.3297C17.1854 14.2574 17.0295 14.7584 16.8996 15.0924C16.7289 15.534 16.5211 15.8531 16.1908 16.1834C15.8568 16.5174 15.5414 16.7215 15.0998 16.8922C14.7658 17.0221 14.2611 17.1779 13.3371 17.2188C12.3352 17.2633 12.0346 17.2744 9.5 17.2744C6.96172 17.2744 6.66113 17.2633 5.66289 17.2188C4.73516 17.1779 4.23418 17.0221 3.9002 16.8922C3.45859 16.7215 3.13945 16.5137 2.80918 16.1834C2.4752 15.8494 2.27109 15.534 2.10039 15.0924C1.97051 14.7584 1.81465 14.2537 1.77383 13.3297C1.7293 12.3277 1.71816 12.0271 1.71816 9.49258C1.71816 6.9543 1.7293 6.65371 1.77383 5.65547C1.81465 4.72773 1.97051 4.22676 2.10039 3.89277C2.27109 3.45117 2.47891 3.13203 2.80918 2.80176C3.14316 2.46777 3.45859 2.26367 3.9002 2.09297C4.23418 1.96309 4.73887 1.80723 5.66289 1.76641C6.66113 1.72187 6.96172 1.71074 9.5 1.71074ZM9.5 0C6.9209 0 6.59805 0.0111328 5.58496 0.0556641C4.57559 0.100195 3.88164 0.263477 3.28047 0.497266C2.65332 0.742188 2.12266 1.06504 1.5957 1.5957C1.06504 2.12266 0.742188 2.65332 0.497266 3.27676C0.263477 3.88164 0.100195 4.57187 0.0556641 5.58125C0.0111328 6.59805 0 6.9209 0 9.5C0 12.0791 0.0111328 12.402 0.0556641 13.415C0.100195 14.4244 0.263477 15.1184 0.497266 15.7195C0.742188 16.3467 1.06504 16.8773 1.5957 17.4043C2.12266 17.9312 2.65332 18.2578 3.27676 18.499C3.88164 18.7328 4.57188 18.8961 5.58125 18.9406C6.59434 18.9852 6.91719 18.9963 9.49629 18.9963C12.0754 18.9963 12.3982 18.9852 13.4113 18.9406C14.4207 18.8961 15.1147 18.7328 15.7158 18.499C16.3393 18.2578 16.8699 17.9312 17.3969 17.4043C17.9238 16.8773 18.2504 16.3467 18.4916 15.7232C18.7254 15.1184 18.8887 14.4281 18.9332 13.4188C18.9777 12.4057 18.9889 12.0828 18.9889 9.50371C18.9889 6.92461 18.9777 6.60176 18.9332 5.58867C18.8887 4.5793 18.7254 3.88535 18.4916 3.28418C18.2578 2.65332 17.935 2.12266 17.4043 1.5957C16.8773 1.06875 16.3467 0.742188 15.7232 0.500977C15.1184 0.267187 14.4281 0.103906 13.4188 0.059375C12.402 0.0111328 12.0791 0 9.5 0Z" fill="#9FA9BC"/>
                <path d="M9.5 4.62012C6.80586 4.62012 4.62012 6.80586 4.62012 9.5C4.62012 12.1941 6.80586 14.3799 9.5 14.3799C12.1941 14.3799 14.3799 12.1941 14.3799 9.5C14.3799 6.80586 12.1941 4.62012 9.5 4.62012ZM9.5 12.6654C7.75215 12.6654 6.33457 11.2479 6.33457 9.5C6.33457 7.75215 7.75215 6.33457 9.5 6.33457C11.2479 6.33457 12.6654 7.75215 12.6654 9.5C12.6654 11.2479 11.2479 12.6654 9.5 12.6654Z" fill="#9FA9BC"/>
                <path d="M15.7121 4.4271C15.7121 5.05796 15.2 5.56636 14.5729 5.56636C13.942 5.56636 13.4336 5.05425 13.4336 4.4271C13.4336 3.79624 13.9457 3.28784 14.5729 3.28784C15.2 3.28784 15.7121 3.79995 15.7121 4.4271Z" fill="#9FA9BC"/>
                </g>
                <defs>
                <clipPath id="clip0_1_291">
                <rect width="19" height="19" fill="white"/>
                </clipPath>
                </defs>
              </svg>  
            </span>
            <span class="sidebar-text">Instagram</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('twitter_data')}}" class="nav-link">
            <span class="sidebar-icon">
            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.3263 0.903931H20.6998L13.3297 9.32742L22 20.7899H15.2112L9.89404 13.838L3.80995 20.7899H0.434432L8.31743 11.78L0 0.903931H6.96111L11.7674 7.25826L17.3263 0.903931ZM16.1423 18.7707H18.0116L5.94539 2.81706H3.93946L16.1423 18.7707Z" fill="#9FA9BC"/>
            </svg>   
            </span>
            <span class="sidebar-text">Twitter</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('youtube_data')}}" class="nav-link">
            <span class="sidebar-icon">            
              <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.7709 6.90004C22.7709 6.90004 22.5463 5.31429 21.8545 4.61801C20.9785 3.7016 19.9992 3.69711 19.55 3.6432C16.3336 3.40961 11.5045 3.40961 11.5045 3.40961H11.4955C11.4955 3.40961 6.66641 3.40961 3.45 3.6432C3.00078 3.69711 2.02148 3.7016 1.14551 4.61801C0.453711 5.31429 0.233594 6.90004 0.233594 6.90004C0.233594 6.90004 0 8.76429 0 10.6241V12.367C0 14.2268 0.229102 16.0911 0.229102 16.0911C0.229102 16.0911 0.453711 17.6768 1.14102 18.3731C2.01699 19.2895 3.16699 19.258 3.6791 19.3569C5.5209 19.5321 11.5 19.586 11.5 19.586C11.5 19.586 16.3336 19.577 19.55 19.3479C19.9992 19.294 20.9785 19.2895 21.8545 18.3731C22.5463 17.6768 22.7709 16.0911 22.7709 16.0911C22.7709 16.0911 23 14.2313 23 12.367V10.6241C23 8.76429 22.7709 6.90004 22.7709 6.90004ZM9.12363 14.4828V8.01859L15.3363 11.262L9.12363 14.4828Z" fill="#9FA9BC"/>
              </svg>  
            </span>
            <span class="sidebar-text">YouTube</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('tiktok_data')}}" class="nav-link">
            <span class="sidebar-icon">             
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.9385 0H11.3993V14.3043C11.3993 16.0087 10.0382 17.4087 8.34423 17.4087C6.65029 17.4087 5.2891 16.0087 5.2891 14.3043C5.2891 12.6304 6.62005 11.2608 8.2535 11.2V7.60871C4.65388 7.66955 1.75 10.6217 1.75 14.3043C1.75 18.0174 4.71437 21 8.37449 21C12.0346 21 14.9989 17.987 14.9989 14.3043V6.96955C16.3299 7.94348 17.9633 8.52174 19.6875 8.55219V4.96087C17.0256 4.86957 14.9385 2.67826 14.9385 0Z" fill="#9FA9BC"/>
              </svg>  
            </span>
            <span class="sidebar-text">TikTok</span>
          </a>
        </li>
        <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
     
        
      <li class="nav-item">
        <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          data-bs-target="#submenu-pages">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <span class="sidebar-text">Settings</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div class="multi-level collapse" role="list" id="submenu-pages" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a href="../../pages/settings.html" class="nav-link">
                <span class="sidebar-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.09 8.99996C9.3251 8.33163 9.78915 7.76807 10.4 7.40909C11.0108 7.05012 11.7289 6.9189 12.4272 7.03867C13.1255 7.15844 13.7588 7.52148 14.2151 8.06349C14.6713 8.60549 14.9211 9.29148 14.92 9.99996C14.92 12 11.92 13 11.92 13" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 17H12.01" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                </span>
                <span class="sidebar-text">Info & FAQ</span>
              </a>
            </li>
            <li class="nav-item ">
              <a href="../../pages/settings.html" class="nav-link">
                <span class="sidebar-icon">                 
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38855 4.8716 7.38855 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="#9FA9BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>  
                </span>
                <span class="sidebar-text">Profile</span>
              </a>
            </li>
            <li class="nav-item ">
              <a href="../../pages/settings.html" class="nav-link">
                <span class="sidebar-icon">                 
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.2266 6.45648C22.2266 3.86938 20.129 1.77148 17.5426 1.77148H12.6676C10.0803 1.77148 7.98257 3.8692 7.98257 6.45648V7.38948C7.98257 7.94177 8.43028 8.38948 8.98257 8.38948C9.53485 8.38948 9.98257 7.94177 9.98257 7.38948V6.45648C9.98257 4.97377 11.1849 3.77148 12.6676 3.77148H17.5426C19.0241 3.77148 20.2266 4.97359 20.2266 6.45648V17.5865C20.2266 19.0694 19.0241 20.2715 17.5426 20.2715H12.6576C11.1805 20.2715 9.98257 19.0738 9.98257 17.5975V16.6545C9.98257 16.1022 9.53485 15.6545 8.98257 15.6545C8.43028 15.6545 7.98257 16.1022 7.98257 16.6545V17.5975C7.98257 20.1791 10.0766 22.2715 12.6576 22.2715H17.5426C20.129 22.2715 22.2266 20.1736 22.2266 17.5865V6.45648Z" fill="#9FA9BC"/>
                    <path d="M15.2305 12.0215C15.2305 11.4692 14.7828 11.0215 14.2305 11.0215H4.61098L5.82273 9.81512C6.21412 9.42547 6.21553 8.79231 5.82587 8.40091C5.43622 8.00952 4.80305 8.00811 4.41166 8.39777L1.48366 11.3128C1.39085 11.4052 1.31806 11.5139 1.26806 11.6322C1.25461 11.664 1.24275 11.6967 1.2326 11.7301C1.20409 11.8236 1.1892 11.9217 1.18919 12.0214C1.18919 12.1159 1.20256 12.209 1.22827 12.2983C1.24303 12.3496 1.26179 12.3993 1.2842 12.4469C1.33322 12.5511 1.40034 12.6471 1.48354 12.73L4.41154 15.646C4.80287 16.0357 5.43603 16.0344 5.82575 15.6431C6.21547 15.2518 6.21417 14.6186 5.82285 14.2289L4.61047 13.0215H14.2305C14.7828 13.0215 15.2305 12.5738 15.2305 12.0215Z" fill="#9FA9BC"/>
                  </svg>  
                </span>
                <span class="sidebar-text">logout</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      </ul>
    </div>
  </nav>