<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <div>Halo,</div>
    <div>{{Auth::user()->name}}</div>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="now-ui-icons business_briefcase-24"></i>
          <p>
            {{ __("Projects ") }}
            <b class="caret"></b>
          </p>
        </a>

                  <div class="collapse show" id="laravelExamples">
                    
                    <ul class="nav">
                      <li class="@if ($activePage == 'create') active @endif">
                      <a href="{{ route('projects.create') }}">
                          <i class="now-ui-icons ui-1_simple-add"></i>
                          <p> {{ __("Create Project ") }} </p>
                        </a>
                      </li>
                <li class="@if ($activePage == 'list') active @endif">
                  <a href="{{ route('projects.index') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p> {{ __("List") }} </p>
                  </a>
                </li>
              </ul>
            </div>
      <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      {{-- <li class = "@if ($activePage == 'task') active @endif">
        <a href="{{ route('projects.task') }}">
          <i class="now-ui-icons files_single-copy-04"></i>
          <p>{{ __('Task') }}</p>
        </a> --}}
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Report') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons users_circle-08"></i>
          <p>{{ __('Users') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'categories') active @endif">
        <a href="{{ route('categories.index') }}">
            <i class="now-ui-icons text_caps-small"></i>
            <p>{{ __('Categories') }}</p>
        </a>
    </li>
      </li>
    </ul>
  </div>
</div>
