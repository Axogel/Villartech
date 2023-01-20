<div class="container py-5">
    <div class="row">
  
      <!-- For demo purpose -->
      
      <!-- END -->
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h2 class="h6 font-weight-bold text-center mb-4">Overall progress</h2>
  
          <!-- Progress bar 1 -->
          <div class="progress mx-auto" data-value='80'>
            <span class="progress-left">
                          <span class="progress-bar border-primary"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-primary"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info -->
          
          <!-- END -->
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h2 class="h6 font-weight-bold text-center mb-4">Work hours</h2>
  
          <!-- Progress bar 2 -->
          <div class="progress mx-auto" data-value='25'>
            <span class="progress-left">
                          <span class="progress-bar border-danger"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-danger"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">25<sup class="small">%</sup></div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info-->
          
          <!-- END -->
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h2 class="h6 font-weight-bold text-center mb-4">Server time</h2>
  
          <!-- Progress bar 3 -->
          <div class="progress mx-auto" data-value='76'>
            <span class="progress-left">
                          <span class="progress-bar border-success"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-success"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">76<sup class="small">%</sup></div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info -->
          
          <!-- END -->
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h2 class="h6 font-weight-bold text-center mb-4">Total overdue</h2>
  
          <!-- Progress bar 4 -->
          <div class="progress mx-auto" data-value='12'>
            <span class="progress-left">
                          <span class="progress-bar border-warning"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-warning"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">12<sup class="small">%</sup></div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info -->
          
          <!-- END -->
        </div>
      </div>
    </div>
  </div>



<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.progress {
  width: 150px;
  height: 150px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid blue;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #ff7e5f;
  background: -webkit-linear-gradient(to right, #ff7e5f, #feb47b);
  background: linear-gradient(to right, #ff7e5f, #feb47b);
  min-height: 100vh;
}

.rounded-lg {
  border-radius: 1rem;
}

.text-gray {
  color: #aaa;
}

div.h4 {
  line-height: 1rem;
}
</style>



<script
src="https://code.jquery.com/jquery-3.6.3.slim.js"
integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc="
crossorigin="anonymous"></script>