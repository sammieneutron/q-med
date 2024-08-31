<div class="sidemenu-wrapper appointment-info ">
  <div class="sidemenu-content">
    <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
    <div class="form-wrap">
      <form action="mail.php" method="POST" class="appointment-form">
          <h4 class="form-title">Make An Appointment</h4>
          <div class="row">
              <div class="form-group col-12">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
              </div>
              <div class="form-group col-12">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
              </div>
              <div class="form-group col-12">
                  <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
              </div>
              <div class="form-group col-12">
                  <select name="subject" id="subject" class="form-select">
                      <option value="" disabled selected hidden>Choose Department</option>
                      <option value="Make Appointment">Make Appointment</option>
                      <option value="General Inquiry">General Inquiry</option>
                      <option value="Medicine Help">Medicine Help</option>
                      <option value="Consultation">Consultation</option>
                  </select>
              </div>
              <div class="form-group col-6">
                  <input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Date">
              </div>
              <div class="form-group col-6">
                  <input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Time">
              </div>
              <div class="form-btn col-12">
                  <button class="th-btn style4 btn-fw">BOOK AN APPOINTMENT</button>
              </div>
          </div>
          <p class="form-messages mb-0 mt-3"></p>
      </form>
    </div>
  </div>
</div>

