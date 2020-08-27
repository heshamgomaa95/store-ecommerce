<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2"> </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            لغة جديده </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاقسام الرئيسيه </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            قسم جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاقسام الفرعية   </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">400</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            قسم فرعي جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">المتاجر  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            متجر  </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الطلاب  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            طالب </a>
                    </li>
                </ul>
            </li>

            <!---- Setting --->
            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"
                                                                                    data-i18n="nav.templates.main">{{__('dashboard.Setting')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{__('dashboard.Shipping')}}</a>
                        <ul class="menu-content">

                            <li><a class="menu-item" href="{{route('edit.shipping.methods','free')}}"
                                   data-i18n="nav.templates.vert.classic_menu">{{__('dashboard.Free Shipping')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{route('edit.shipping.methods','local')}}">{{__('dashboard.Local Shipping')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{route('edit.shipping.methods','out')}}"
                                   data-i18n="nav.templates.vert.compact_menu">{{__('dashboard.OutSide Shipping')}}</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
            <!---- --->

        </ul>
    </div>
</div>
