<div class="sidebar shadow p-4" style="height: 100vh; background:#101323;" id="side_nav">
    <div class="header-box d-flex align-items-center justify-content-between px-2">
        <div class="text-center mx-md-auto">
            {{-- <img src="{{ asset('assets/images/icon/logo-bienti-B-01.png')}}" width="100%" id="logo-single" class="img-fluid d-none" alt=""> --}}
            <img src="{{ asset('assets/images/icon/logo-bienti-B-01.png')}}" width="50" id="logo-large" class="img-fluid" alt="">
            <img src="{{ asset('assets/images/icon/logo-BIENTI-WHITE.png')}}" height="25" width="" alt="">
            <div>
                <span class="text-white fw-bold" style="font-size: 30px;">KOL.com</span>
            </div>
        </div>
        <button id="btn-open" class="btn btn-primary d-md-none d-block"><i class="fas fa-stream"></i></button>
    </div>
    <div class="p-3 accordion" id="accordionExample">
        <div class="mb-4">
            <a href="" class="align-items-center text-decoration-none d-flex">
                <svg width="22" height="22" class="ms-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0H5.25C6.04565 0 6.80871 0.316071 7.37132 0.87868C7.93393 1.44129 8.25 2.20435 8.25 3V5.25C8.25 6.04565 7.93393 6.80871 7.37132 7.37132C6.80871 7.93393 6.04565 8.25 5.25 8.25H3C2.20435 8.25 1.44129 7.93393 0.87868 7.37132C0.316071 6.80871 0 6.04565 0 5.25V3ZM9.75 3C9.75 2.20435 10.0661 1.44129 10.6287 0.87868C11.1913 0.316071 11.9544 0 12.75 0H15C15.7956 0 16.5587 0.316071 17.1213 0.87868C17.6839 1.44129 18 2.20435 18 3V5.25C18 6.04565 17.6839 6.80871 17.1213 7.37132C16.5587 7.93393 15.7956 8.25 15 8.25H12.75C11.9544 8.25 11.1913 7.93393 10.6287 7.37132C10.0661 6.80871 9.75 6.04565 9.75 5.25V3ZM0 12.75C0 11.9544 0.316071 11.1913 0.87868 10.6287C1.44129 10.0661 2.20435 9.75 3 9.75H5.25C6.04565 9.75 6.80871 10.0661 7.37132 10.6287C7.93393 11.1913 8.25 11.9544 8.25 12.75V15C8.25 15.7956 7.93393 16.5587 7.37132 17.1213C6.80871 17.6839 6.04565 18 5.25 18H3C2.20435 18 1.44129 17.6839 0.87868 17.1213C0.316071 16.5587 0 15.7956 0 15V12.75ZM9.75 12.75C9.75 11.9544 10.0661 11.1913 10.6287 10.6287C11.1913 10.0661 11.9544 9.75 12.75 9.75H15C15.7956 9.75 16.5587 10.0661 17.1213 10.6287C17.6839 11.1913 18 11.9544 18 12.75V15C18 15.7956 17.6839 16.5587 17.1213 17.1213C16.5587 17.6839 15.7956 18 15 18H12.75C11.9544 18 11.1913 17.6839 10.6287 17.1213C10.0661 16.5587 9.75 15.7956 9.75 15V12.75Z"
                    fill="{{ request()->routeIs('web.cm.dashboard') ? '#003780' : '#555555'}}"/>
                </svg>
                <h5 id="huruf_list" class="mb-0 ms-3 {{ request()->routeIs('web.cm.dashboard') ? 'fw-bold text-template' : 'text-muted'}} ms-2 ">Dashboard</h5>
            </a>
        </div>
        <div class="nav_link col-12 mb-4  boder-0">
            <div class="accordion-header border-0">
                <button class="bg-transparent cursor-pointer border-0 ms-1  focus-ring focus-ring-light pb-2 p-0 d-flex align-items-center accordion-button" id="divUser" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true" aria-controls="orders-collapse">
                    <svg width="24" height="24" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.0597 15.521C17.5275 15.2015 18.0762 15.0211 18.6423 15.0004C19.2084 14.9798 19.7687 15.1199 20.2585 15.4044C20.7483 15.689 21.1476 16.1064 21.4101 16.6084C21.6725 17.1104 21.7875 17.6764 21.7417 18.241C20.5419 18.6603 19.2675 18.8235 18.0007 18.72C17.9968 17.5866 17.6704 16.4768 17.0597 15.522C16.5176 14.6718 15.7698 13.972 14.8855 13.4875C14.0013 13.003 13.009 12.7493 12.0007 12.75C10.9926 12.7495 10.0005 13.0032 9.11645 13.4877C8.23235 13.9723 7.48472 14.6719 6.94272 15.522M17.9997 18.719L18.0007 18.75C18.0007 18.975 17.9887 19.197 17.9637 19.416C16.1491 20.4571 14.0928 21.0033 12.0007 21C9.83072 21 7.79372 20.424 6.03772 19.416C6.01201 19.1846 5.99965 18.9519 6.00072 18.719M6.00072 18.719C4.73435 18.8263 3.46063 18.6637 2.26172 18.242C2.21607 17.6776 2.33111 17.1117 2.59355 16.6099C2.85598 16.1081 3.25509 15.6908 3.74472 15.4063C4.23435 15.1218 4.79451 14.9817 5.36044 15.0021C5.92636 15.0226 6.47493 15.2028 6.94272 15.522M6.00072 18.719C6.00431 17.5857 6.33234 16.4769 6.94272 15.522M15.0007 6.75C15.0007 7.54565 14.6846 8.30871 14.122 8.87132C13.5594 9.43393 12.7964 9.75 12.0007 9.75C11.2051 9.75 10.442 9.43393 9.8794 8.87132C9.31679 8.30871 9.00072 7.54565 9.00072 6.75C9.00072 5.95435 9.31679 5.19129 9.8794 4.62868C10.442 4.06607 11.2051 3.75 12.0007 3.75C12.7964 3.75 13.5594 4.06607 14.122 4.62868C14.6846 5.19129 15.0007 5.95435 15.0007 6.75ZM21.0007 9.75C21.0007 10.0455 20.9425 10.3381 20.8294 10.611C20.7164 10.884 20.5506 11.1321 20.3417 11.341C20.1328 11.5499 19.8847 11.7157 19.6118 11.8287C19.3388 11.9418 19.0462 12 18.7507 12C18.4552 12 18.1627 11.9418 17.8897 11.8287C17.6167 11.7157 17.3687 11.5499 17.1597 11.341C16.9508 11.1321 16.7851 10.884 16.672 10.611C16.5589 10.3381 16.5007 10.0455 16.5007 9.75C16.5007 9.15326 16.7378 8.58097 17.1597 8.15901C17.5817 7.73705 18.154 7.5 18.7507 7.5C19.3475 7.5 19.9198 7.73705 20.3417 8.15901C20.7637 8.58097 21.0007 9.15326 21.0007 9.75ZM7.50072 9.75C7.50072 10.0455 7.44252 10.3381 7.32945 10.611C7.21637 10.884 7.05064 11.1321 6.84171 11.341C6.63278 11.5499 6.38474 11.7157 6.11176 11.8287C5.83877 11.9418 5.54619 12 5.25072 12C4.95524 12 4.66266 11.9418 4.38968 11.8287C4.1167 11.7157 3.86866 11.5499 3.65973 11.341C3.4508 11.1321 3.28506 10.884 3.17199 10.611C3.05892 10.3381 3.00072 10.0455 3.00072 9.75C3.00072 9.15326 3.23777 8.58097 3.65973 8.15901C4.08168 7.73705 4.65398 7.5 5.25072 7.5C5.84745 7.5 6.41975 7.73705 6.84171 8.15901C7.26366 8.58097 7.50072 9.15326 7.50072 9.75Z"
                         stroke="{{ @$sidebarUser ? '#003780' : '#555555'}}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h5 id="huruf_list" class="mb-0  {{ @$sidebarUser ? 'text-template' : 'text-muted' }}  ms-2 ">Users</h5>
                </button>
                <div class="collapse {{ @$sidebarUser }}" id="orders-collapse" data-bs-parent="#accordionExample" style="">
                    <ul class="list-unstyled fw-normal small mt-3 ms-2">
                      <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-users {{ request()->routeIs('web.cm.anggota') ? 'fw-bold text-template' : 'text-muted'}}">Anggota</a></li>
                      <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-users {{ request()->routeIs('web.cm.organisasi') ? 'fw-bold text-template' : 'text-muted'}}">Organisasi</a></li>
                      <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-users {{ request()->routeIs('web.cm.request') ? 'fw-bold text-template' : 'text-muted'}}">Request</a></li>
                      <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-users {{ request()->routeIs('web.cm.blog') ? 'fw-bold text-template' : 'text-muted'}}">Blog</a></li>
                    </ul>
                  </div>
            </div>
        </div>
        <div class=" col-12 mb-1">
            <div class="accordion-header">
                <button class="bg-transparent accordion-button  focus-ring focus-ring-light cursor-pointer border-0 p-0 pb-2 d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#Messages-collapse" aria-expanded="false">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 12C4.5 13.9891 5.29018 15.8967 6.6967 17.3033C8.10322 18.7098 10.0109 19.5 12 19.5C13.9891 19.5 15.8968 18.7098 17.3033 17.3033C18.7098 15.8967 19.5 13.9891 19.5 12M4.5 12C4.5 10.0108 5.29018 8.10318 6.6967 6.69666C8.10322 5.29014 10.0109 4.49996 12 4.49996C13.9891 4.49996 15.8968 5.29014 17.3033 6.69666C18.7098 8.10318 19.5 10.0108 19.5 12M4.5 12H3M19.5 12H21M19.5 12H12L7.5 4.20496M3.543 15.077L4.953 14.564M19.048 9.43396L20.458 8.92096M5.106 17.785L6.256 16.821M17.746 7.17896L18.895 6.21496M7.501 19.795L8.251 18.495L12.002 12M15.751 5.50496L16.501 4.20496M10.438 20.863L10.698 19.386M13.303 4.61396L13.563 3.13696M13.563 20.863L13.303 19.386M10.698 4.61396L10.438 3.13696M16.5 19.794L15.75 18.495M18.894 17.785L17.745 16.821M6.256 7.17796L5.106 6.21396M20.458 15.078L19.048 14.565M4.954 9.43496L3.544 8.92096"
                        stroke="{{ @$mainFitur ? '#003780' : '#555555'}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h5 id="huruf_list" class="mb-0 {{ @$mainFitur ? 'text-template' : 'text-muted' }} ms-2 ">Main Fitur</h5>
                </button>
                <div class="collapse {{ @$mainFitur }}" id="Messages-collapse" data-bs-parent="#accordionExample" style="">
                    <ul class="list-unstyled fw-normal small mt-3 ms-2">
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-fitur {{ request()->routeIs('web.cm.pembayaran') ? 'fw-bold text-template' : 'text-muted'}}">Pembayaran</a></li>
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-fitur {{ request()->routeIs('web.cm.arisan') ? 'fw-bold text-template' : 'text-muted'}}">Arisan</a></li>
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-fitur {{ request()->routeIs('web.cm.agenda') ? 'fw-bold text-template' : 'text-muted'}}">Agenda</a></li>
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-circle text-dark me-2" style="font-size: 5px"></i><a href="" class="text-decoration-none side-fitur {{ request()->routeIs('web.cm.anggota_main') ? 'fw-bold text-template' : 'text-muted'}}">Anggota</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</div>
