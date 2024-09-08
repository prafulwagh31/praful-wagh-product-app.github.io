<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Products </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('products.create') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Product Create </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Product List </span></a></li>
                        {{-- <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li> --}}
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
