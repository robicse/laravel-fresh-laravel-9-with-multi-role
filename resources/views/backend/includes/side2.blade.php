@php
  use Spatie\Permission\Models\Permission;
@endphp
<aside
    class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">

    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank">
            <img src="{{ asset('backend/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">IBO</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @php
                $modules = Helper::getCollapseAndParentModuleList();
                $segment = Request::segment(1);
            @endphp
            {{-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboards</span>
                </a>
                <div class="collapse  show " id="dashboardsExamples">
                    <ul class="nav ms-4">

                        <li class="nav-item active">
                            <a class="nav-link active" href="../../pages/dashboards/default.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Default </span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li> --}}

            @if (count($modules) > 0)
                    @foreach (@$modules as $module)
                        @php
                            $mainMenuPermission = Permission::where('module_id',@$module->id)->pluck('name')->first();
                        @endphp
                        @if ($module->parent_menu === 'Parent')
                            @can(@$mainMenuPermission)
                                <li class="nav-item">
                                    <a href="{{ $module->parent_menu === 'Parent' ? route(Request::segment(1) . '.' . @$module->slug . '.index') : '#' }}"
                                        class="nav-link {{ $module->parent_menu === 'Parent' ? (Request::is(Request::segment(1) . '/' . @$module->slug . '*') ? 'active' : '') : '' }}">
                                        <i class="{{ @$module->icon }}"></i>
                                        <p>
                                            {{ @$module->name }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        @else
                            @php
                                $childModules = Helper::getChildModuleList(@$module->name);
                                $slugList = Helper::getChildModuleSlugList(@$module->name,Request::segment(1));
                                if(in_array(Request::segment(2),@$slugList)){
                                    $active = 'found';
                                }else{
                                    $active = 'not found';
                                }

                                $moduleIds = [];
                                if (count($childModules) > 0){
                                    $nestedData = [];
                                    foreach($childModules as $childModule){
                                        $nestedData[]=@$childModule->id;
                                    }
                                    array_push($moduleIds, $nestedData);
                                }
                                $collapseChildMenuPermission = Helper::collapseChildMenuPermission($moduleIds[0]);
                            @endphp

                            @can($collapseChildMenuPermission)
                            <li class="nav-item has-treeview {{ $active === 'found' ? 'menu-open' : ''}}">
                                <a href="#" class="nav-link">
                                    <i style="color: aliceblue !important" class="{{ @$module->icon }}"></i>
                                    <p>
                                        {{ @$module->name }}
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>

                                @if (count($childModules) > 0)
                                    <ul class="nav nav-treeview" style="display: {{ $active === 'found' ? 'block' : ''}}">
                                        @foreach ($childModules as $childModule)
                                        @php
                                        $childMenuPermission = Permission::where('module_id',@$childModule->id)->pluck('name')->first();
                                        @endphp
                                            @can(@$childMenuPermission)
                                            <li class="nav-item">
                                                <a href="{{ route(Request::segment(1) . '.' . @$childModule->slug . '.index') }}"
                                                    class="nav-link {{ Request::is(Request::segment(1) . '/' . @$childModule->slug . '*') ? 'active' : '' }}">
                                                    <i style="color: aliceblue !important" class="{{ @$childModule->icon }}"></i>
                                                    <p>{{ @$childModule->name }}</p>
                                                </a>
                                            </li>
                                            @endcan
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endcan
                        @endif
                    @endforeach
                @endif
        </ul>
    </div>

</aside>
