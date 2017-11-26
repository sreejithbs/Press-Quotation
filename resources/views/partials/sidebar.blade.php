<!-- Left Sidebar Start -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Quotations</li>

                <li class="has_sub">
                    <a href="{{ route('quotation.create') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Add New Quotation</span> </a>
                </li>

                <li class="has_sub">
                    <a href="{{ route('quotation.index') }}" class="waves-effect"><i class="mdi mdi-layers"></i> <span> List all Quotations </span> <span class="menu-arrow"></span></a>
                </li>

                <li class="menu-title">Orders</li>

                <li class="has_sub">
                    <a href="{{ route('order.create') }}" class="waves-effect"><i class="mdi mdi-comment-text-outline"></i><span> New Orders </span> <span class="menu-arrow"></span></a>
                </li>

                <li class="has_sub">
                    <a href="{{ route('order.index') }}" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i><span> List all Orders </span> <span class="menu-arrow"></span></a>

                </li>

            </ul>
        </div>

        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End