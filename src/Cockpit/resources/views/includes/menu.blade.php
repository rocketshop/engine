<div class="list-group">
  <div href="#" class="list-group-item flex-column align-items-start px-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1 px-3">General</h5>
      <small></small>
    </div>

    <nav class="nav flex-column">        
        <a class="nav-link"  href="{{ url('admin/dashboard') }}">{{ trans('cockpit::dashboard') }}</a>
        <a class="nav-link"  href="{{ url('admin/users') }}">{{ trans('cockpit::users') }}</a>
        <a class="nav-link"  href="{{ url('admin/appearance') }}">{{ trans('cockpit::appearance') }}</a>
        <a class="nav-link"  href="{{ url('admin/settings') }}">{{ trans('cockpit::settings') }}</a>
    </nav>
  </div>


  <div href="#" class="list-group-item flex-column align-items-start px-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1 px-3">Rocket Shop</h5>
      <small></small>
    </div>

    <nav class="nav flex-column">        
        <a class="nav-link"  href="{{ url('admin/requests') }}">{{ trans('cockpit::requests') }}</a>
        <a class="nav-link"  href="{{ url('admin/stores') }}">{{ trans('cockpit::stores') }}</a>
    </nav>
  </div>


  <div href="#" class="list-group-item flex-column align-items-start px-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1 px-3">Ecommerce</h5>
      <small></small>
    </div>

    <nav class="nav flex-column">        
        <a class="nav-link"  href="{{ url('admin/catalog') }}">{{ trans('cockpit::catalog') }}</a>
        <a class="nav-link"  href="{{ url('admin/sales') }}">{{ trans('cockpit::sales') }}</a>
        <a class="nav-link"  href="{{ url('admin/promotions') }}">{{ trans('cockpit::promotions') }}</a>
        <a class="nav-link"  href="{{ url('admin/customers') }}">{{ trans('cockpit::customers') }}</a>
    </nav>
  </div>


  <div href="#" class="list-group-item flex-column align-items-start px-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1 px-3">CMS</h5>
      <small></small>
    </div>

    <nav class="nav flex-column">        
        <a class="nav-link"  href="{{ url('admin/posts') }}">{{ trans('cockpit::posts') }}</a>
        <a class="nav-link"  href="{{ url('admin/pages') }}">{{ trans('cockpit::pages') }}</a>
        <a class="nav-link"  href="{{ url('admin/media') }}">{{ trans('cockpit::media') }}</a>
    </nav>
  </div>


  <div href="#" class="list-group-item flex-column align-items-start px-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1 px-3">Marketing</h5>
      <small></small>
    </div>

    <nav class="nav flex-column">        
        <a class="nav-link"  href="{{ url('admin/analytics') }}">{{ trans('cockpit::analytics') }}</a>
    </nav>
  </div>


  <div href="#" class="list-group-item flex-column align-items-start px-0">
    <nav class="nav flex-column">        
    <a class="nav-link"  href="{{ url('admin/logout') }}">{{ trans('cockpit::logout') }}</a>
    </nav>
  </div>

</div>