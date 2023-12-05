<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{route('admin.dashboard')}}" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img src="{{asset('user/images/logo.png')}}" style="width: 130px" alt="">
        </span>
        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">{{ Auth::user()->name }}</span> --}}
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{route('admin.dashboard')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Profile Setting</span>
      </li>
      <li class="menu-item">
        <a href="javascrip" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Misc">Company Info</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('profile.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Introduction</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('slider.index')}}" class="menu-link">              
              <div data-i18n="Account Settings">Home Banner</div>
            </a>       
          </li>          
          
        <li class="menu-item">
            <a href="{{route('dream.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Career Transit</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('network.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Networks</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('testimonial.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Feedbacks</div>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Course Details</span>
      </li>
      <li class="menu-item">
        <a href="javascrip" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Misc">Courses</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('courses.index')}}" class="menu-link">              
              <div data-i18n="Account Settings">Courses</div>
            </a>       
          </li>          
          <li class="menu-item">
            <a href="{{route('highlight.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Highlights</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('tools.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Tools</div>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascrip" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Misc">Bootcamp</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('bootcamps.index')}}" class="menu-link">              
              <div data-i18n="Account Settings">Bootcamp Courses</div>
            </a>       
          </li>          
          <li class="menu-item">
            <a href="{{route('memos.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Bootcamp Memo</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('sponsors.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Sponsors</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="" class="menu-link">
              <div data-i18n="Under Maintenance">Tools</div>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascrip" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Misc">Diploma Programs</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('diploma.index')}}" class="menu-link">              
              <div data-i18n="Account Settings">Courses</div>
            </a>       
          </li>          
          <li class="menu-item">
            <a href="" class="menu-link">
              <div data-i18n="Under Maintenance">Highlights</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="" class="menu-link">
              <div data-i18n="Under Maintenance">Tools</div>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Resources</span>
      </li>
      <li class="menu-item">
        <a href="{{route('blog.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bowling-ball"></i>
          <div data-i18n="Account Settings">Blogs</div>
        </a>       
      </li>
      <li class="menu-item">
        <a href="{{route('practices.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bowling-ball"></i>
          <div data-i18n="Account Settings">Practice Test</div>
        </a>       
      </li>
      <li class="menu-item">
        <a href="{{route('interviews.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bowling-ball"></i>
          <div data-i18n="Account Settings">Interview Question</div>
        </a>       
      </li>
      {{-- <li class="menu-item">
        <a href="{{route('slider-image.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-slider-alt"></i>
          <div data-i18n="Account Settings">Home Slider</div>
        </a>       
      </li>
      <li class="menu-item">
        <a href="{{route('our-services.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-server"></i>
          <div data-i18n="Account Settings">Our Services</div>
        </a>       
      </li>
      
      <li class="menu-item">
        <a href="{{route('choose.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bowling-ball"></i>
          <div data-i18n="Account Settings">Why Choose Us</div>
        </a>       
      </li>
      <li class="menu-item">
        <a href="javascrip" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Misc">About Us</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('testimonials.index')}}" class="menu-link">
              <div data-i18n="Error">Testimonials</div>
            </a>
          </li>          
          <li class="menu-item">
            <a href="{{route('mds.index')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Managing Director</div>
            </a>
          </li>
          
        </ul>
      </li>
      <!-- Components -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Study Abroad</span></li>
      <!-- Cards -->
      <li class="menu-item">
        <a href="{{route('countries.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Country</div>
        </a>
      </li>     

      <li class="menu-item">
        <a href="{{route('members.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">Consultants Team</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('university.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">University</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('classes.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-crown"></i>
          <div data-i18n="Boxicons">Language Class</div>
        </a>
      </li>

      <!-- Forms & Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Gallery</span></li>
      <!-- Forms -->
      <li class="menu-item">
        <a href="{{route('gallery-categories.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Gallery Category</div>
        </a>
      </li> 
      <li class="menu-item">
        <a href="{{route('gallery.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Gallery</div>
        </a>
      </li>
      --}}
      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
        <a href="{{route('faqs.index')}}"  class="menu-link">
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Support">FAQs</div>
        </a>
      </li>     
      <li class="menu-item">
        <a href="{{route('partner-associate.index')}}"  class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Support">Associates/Partners</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('contacts.index')}}"  class="menu-link">
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Support </div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('inquiries.index')}}"  class="menu-link">
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Join Us</div>
        </a>
      </li>
       
     
    </ul>
  </aside>