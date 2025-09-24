  <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
              <ul>
                  <li class="menu-title">Main</li>
                  <li>
                      <a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>ড্যাশবোর্ড</span></a>
                  </li>
                   <li>
                    <a href="{{url('/admin/create-invoice')}}" class="fa-solid fa-users"><span>ইনভয়েস তৈরি করুন</span></a>
                  </li>
                  <li>
                      <a href="{{ url('/admin/invoice')}}"><i class="fa-solid fa-file-contract"></i><span>ইনভয়েস এবং
                              বিলিং</span></a>
                  </li>
                  <li class="dropdown">
                      <a href="#"><i class="fa-solid fa-user"></i> <span>টেকনিশিয়ান</span> ▼</a>
                      <ul>
                          <li><a href="{{url('/admin/tecnician/list')}}">লিস্ট</a></li>
                          <li><a href="{{url('/admin/tecnician/create')}}">নতুন যোগ</a></li>
                      </ul>
                  </li>
                   <li>
                      <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-right-from-bracket"></i><span style="color: red">লগ আউট</span></a>
                  </li>
              </ul>
              </li>
              </ul>
          </div>
      </div>
  </div>
