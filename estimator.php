<?php 
include 'layout/header.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = mysqli_real_escape_string($link, $_POST['fullName']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $contact_number = mysqli_real_escape_string($link, $_POST['phone']);
    $address = mysqli_real_escape_string($link, $_POST['address']);
    $package = mysqli_real_escape_string($link, $_POST['selectedPackage']);
    $plot_area = mysqli_real_escape_string($link, $_POST['plotArea']);
    $floor = mysqli_real_escape_string($link, $_POST['selectedFloors']);
    
    // Insert into database with only required fields
    $query = "INSERT INTO enquiries (name, email, contact_number, address, package, plot_area, floor) 
              VALUES ('$name', '$email', '$contact_number', '$address', '$package', '$plot_area', '$floor')";
    
    if (mysqli_query($link, $query)) {
        $success_message = "Your enquiry has been submitted successfully! We'll get back to you soon.";
    } else {
        $error_message = "Error submitting enquiry: " . mysqli_error($link);
    }
}
?>

<section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">
  <div class="bg-img"><img src="assets/images/banners/about-banner.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
        <h1 class="pagetitle__heading">Cost Estimator</h1>
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cost Estimator</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>



<section class="contact-layout1">
  <div class="container">
    <div class="contact-panel w-100 d-block">

      <!-- Progress Steps -->
      <div class="progress-steps mb-4">
        <div class="row">
          <div class="col-4">
            <div class="step active" data-step="1">
              <div class="step-number">1</div>
            </div>
          </div>
          <div class="col-4">
            <div class="step" data-step="2">
              <div class="step-number">2</div>
            </div>
          </div>
          <div class="col-4">
            <div class="step" data-step="3">
              <div class="step-number">3</div>
            </div>
          </div>
        </div>
      </div>

      <form class="contact-panel__form w-100" method="post" action="" id="costEstimatorForm" style="max-width: 100%;">

        <!-- Step 1: Project Details & Package -->
        <div class="form-step active" id="step1">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="contact-panel__title">Project Details & Package Selection</h4>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="location">Location in Bangalore</label>
                <select class="form-control" id="location" name="location" required>
                  <option value="">Select Location</option>
                  <option value="Central Bangalore">Central Bangalore</option>
                  <option value="East Bangalore">East Bangalore</option>
                  <option value="West Bangalore">West Bangalore</option>
                  <option value="North Bangalore">North Bangalore</option>
                  <option value="South Bangalore">South Bangalore</option>
                </select>
              </div>
            </div>

                         <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group">
                 <label for="plotAreaType">Choose Plot Area</label>
                 <select class="form-control" id="plotAreaType" name="plotAreaType" required>
                   <option value="">Select Plot Area</option>
                   <option value="20x30">20 x 30</option>
                   <option value="30x40">30 x 40</option>
                   <option value="30x50">30 x 50</option>
                   <option value="60x40">60 x 40</option>
                   <option value="custom" onclick="showCustomPlotArea()">Custom Size</option>
                 </select>
               </div>
             </div>
 
             <!-- Custom dimension input -->
             <div class="col-sm-12 col-md-6" id="customPlotArea" >
               <div class="form-group">
                 <label for="customDimension">Enter dimension (e.g., 30x40)</label>
                 <input type="text" class="form-control" id="customDimension" name="customDimension" placeholder="e.g., 30x40">
                 <small class="text-muted">Format: length x width in feet</small>
               </div>
             </div>

            <!-- Package Selection -->
            <div class="col-sm-12">
              <h5 class="mb-3 mt-4">Select Package</h5>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="package-card" data-package="essential" data-price="1899">
                <div class="card text-center p-3 mb-3">
                  <h6 class="font-weight-bold">Standard Package</h6>
                  <p class="mb-0">Rs. 1,899/Sqft</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="package-card" data-package="classic" data-price="2199">
                <div class="card text-center p-3 mb-3">
                  <h6 class="font-weight-bold">Premium Package</h6>
                  <p class="mb-0">Rs. 2,199/Sqft</p>
                </div>
              </div>
            </div>

            <!-- Floor Selection -->
            <div class="col-sm-12">
              <h5 class="mb-3 mt-4">Select Floors</h5>
            </div>

            <div class="col-sm-12">
              <div class="floor-buttons d-flex flex-wrap gap-3">
                <button type="button" class="btn floor-btn" data-floors="1">G</button>
                <button type="button" class="btn floor-btn" data-floors="2">G+1</button>
                <button type="button" class="btn floor-btn" data-floors="3">G+2</button>
                <button type="button" class="btn floor-btn" data-floors="4">G+3</button>
                <button type="button" class="btn floor-btn" data-floors="5">G+4</button>
                <button type="button" class="btn floor-btn" data-floors="6">G+5</button>
                <button type="button" class="btn floor-btn" data-floors="7">G+6</button>
              </div>
            </div>

            <div class="col-sm-12">
              <button type="button" class="btn btn__primary btn__block mt-4" onclick="nextStep(1)">Next Step</button>
            </div>
          </div>
        </div>

        <!-- Step 2: Personal Information -->
        <div class="form-step" id="step2">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="contact-panel__title">Personal Information</h4>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name" id="fullName" name="fullName" required>
              </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your valid email" id="email" name="email" required>
              </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" placeholder="Enter your valid phone number" id="phone" name="phone" required>
              </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" id="address" name="address" required>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn__outline-secondary" onclick="prevStep(2)">Previous</button>
                <button type="button" class="btn btn__primary" onclick="nextStep(2)">View Final Quote</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 3: Final Quote -->
        <div class="form-step" id="step3">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="contact-panel__title">Final Quote Summary</h4>
            </div>

            <div class="col-sm-12">
              <div id="finalQuoteToPrint" class="final-quote-card p-4 bg-light rounded">
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="mb-3">Project Details</h5>
                    <p><strong>Location:</strong> <span id="finalLocation">-</span></p>
                    <p><strong>Plot Area:</strong> <span id="finalPlotArea">-</span></p>
                    <p><strong>Package:</strong> <span id="finalPackage">-</span></p>
                    <p><strong>Floors:</strong> <span id="finalFloors">-</span></p>
                  </div>
                  <div class="col-md-6">
                    <h5 class="mb-3">Cost Breakdown</h5>
                    <p><strong>Total Area:</strong> <span id="finalTotalArea">-</span> sq ft</p>
                    <p><strong>Price per Sqft:</strong> <span id="finalPricePerSqft">-</span></p>
                    <p style="color: #FF4D00;"><strong>Estimated Cost:</strong> <span id="finalEstimatedCost" class="font-weight-bold">-</span></p>
                  </div>
                </div>

              
              </div>
            </div>

            <div class="col-sm-12">
              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn__outline-secondary" onclick="prevStep(3)">Previous</button>
                <div class="d-flex gap-2">
                  <a href="index.php" class="btn btn__secondary">Back to Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hidden inputs for form submission -->
        <input type="hidden" id="selectedPackageInput" name="selectedPackage">
        <input type="hidden" id="selectedFloorsInput" name="selectedFloors">
        <input type="hidden" id="estimatedCostInput" name="estimatedCost">
        <input type="hidden" id="pricePerSqftInput" name="pricePerSqft">
        <input type="hidden" id="totalAreaInput" name="totalArea">
        <input type="hidden" id="plotAreaInput" name="plotArea">
        <input type="hidden" id="locationInput" name="location">

        <div class="contact-result"></div>
      </form>
    </div>
  </div>
</section>

<section class="banner-layout4 py-0 bg-parallax new-banner ">
      <div class="bg-img" >
        <img src="assets/images/banners/1.jpg" alt="banner">
      </div>
      <div class="container col-padding-0">
        <div class="row">
 
          <div class="col-md-12">
 
            <div class="banner-contact d-flex align-items-center">
              <div class="banner-contact__icon">
                <i class="icon-phone1"></i>
              </div>
              <h4 class="banner-contact__title">For more details and personalized options, contact us today!
                team<span class="color-secondary"></span>
              </h4>
              <a href="contact.php" class="btn btn__white btn__bordered">Contact Us</a>
            </div><!-- /.banner-contact -->
          </div><!-- /.col-xl-6 -->
         
        </div><!-- /.row -->
      </div><!-- /.container -->
  </section>


    <section class="faq pb-70 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
           <div class="heading text-center mb-40">
              <span class="heading__subtitle">Our Packages</span>
              <h2 class="heading__title">Construction Packages</h2>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row" id="accordion">
          <div class="col-sm-12 col-md-12 col-lg-6">
          
            <div class="accordion-item opened">
              <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
              <a class="accordion-item__title" href="#">Standard Package – ₹1899/sq.ft</a>

              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse show" data-parent="#accordion">
                <div class="accordion-item__body">
                <p>Perfect balance of quality and affordability.</p>
                  <strong>Includes:</strong>
                  <ul>
                    <li>Quality construction materials (bricks, cement, steel)</li>
                    <li>Standard flooring (vitrified tiles)</li>
                    <li>Basic electrical &amp; plumbing fittings</li>
                    <li>Standard doors &amp; windows</li>
                    <li>BBMP/BDA approved drawings</li>
                    <li>Site supervision &amp; monitoring</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
         
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
         

            <div class="accordion-item opened">
              <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse10">
              <a class="accordion-item__title" href="#">Premium Package – ₹2199/sq.ft</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse10" class="collapse show" data-parent="#accordion">
                <div class="accordion-item__body">
                <p>Luxury and durability combined for an elegant home.</p>
                  <strong>Includes:</strong>
                  <ul>
        
              

<li>Premium branded construction materials</li>
<li>Premium electrical & bathroom fittings</li>
<li>Custom facade & modern elevations</li>
<li>Detailed site monitoring & quality checks</li>
</ul>
<strong>Add-Ons (Optional):</strong>
<ul>
<li>Modular kitchen & false ceiling</li>
<li>Designer flooring (granite/marble options)</li>
<li>Smart home integration</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
       
      </div><!-- /.container -->
    </section><!-- /.FAQ -->
<style>
.progress-steps { margin-bottom: 30px; }
.step { text-align:center; position:relative; padding:20px 10px; transition:all .3s ease; }
.step-number { width:40px; height:40px; border-radius:50%; background:#e9ecef; color:#6c757d; display:flex; align-items:center; justify-content:center; margin:0 auto 10px; font-weight:bold; transition:all .3s ease; }
.step.active .step-number { background-color:#FF4D00; color:#fff; }
.step.completed .step-number { background-color:#28a745; color:#fff; }
.step-title { font-size:14px; color:#6c757d; font-weight:500; }
.step.active .step-title { color:#FF4D00; font-weight:bold; }

.form-step { display:none; }
.form-step.active { display:block; }

.package-card { cursor:pointer; transition:all .3s ease; }
.package-card:hover { transform: translateY(-5px); }
.package-card .card h6{ color:#FF4D00; }
.package-card.selected .card { border-color:#FF4D00; background-color:#FF4D00; color:#fff; box-shadow:0 4px 8px rgba(0,123,255,.2); }
.package-card.selected .card h6{ color:#fff; }

.floor-btn { min-width:60px; height:50px; font-weight:bold; margin-bottom:8px; border:1px solid #6c757d; display:flex; justify-content:center; align-items:center; }
@media screen and (max-width: 768px) {
  .floor-btn{ min-width:100%; height:50px; font-size:14px; }
}
.floor-btn.selected { background-color:#FF4D00; color:#fff; border-color:#FF4D00; }

.final-quote-card { border:2px solid #FF4D00; background:linear-gradient(135deg,#f8f9fa 0%, #e9ecef 100%); }
.btn__outline-secondary { border:2px solid #6c757d; color:#6c757d; background:transparent; }
.btn__outline-secondary:hover { background-color:#6c757d; color:#fff; }
.list-unstyled li { margin-bottom:8px; }
.list-unstyled i { margin-right:8px; }

/* Print only the final quote; hide images/headers/footers etc. */
@media print {
  body * { visibility: hidden !important; }
  #finalQuoteToPrint, #finalQuoteToPrint * { visibility: visible !important; }
  #finalQuoteToPrint { position: absolute; left: 0; top: 0; width: 100%; }
  .page-title, .bg-img, .bg-overlay, nav, header, footer { display: none !important; }
}

/* Alert styling */
.alert {
  border-radius: 8px;
  border: none;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.alert-success {
  background-color: #d4edda;
  color: #155724;
  border-left: 4px solid #28a745;
}

.alert-danger {
  background-color: #f8d7da;
  color: #721c24;
  border-left: 4px solid #dc3545;
}

.btn-close {
  background: transparent;
  border: none;
  font-size: 1.25rem;
  cursor: pointer;
  opacity: 0.5;
}

.btn-close:hover {
  opacity: 1;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  let selectedPackage = null;
  let selectedFloors = 1;
  let pricePerSqft = 0;
  document.getElementById('customPlotArea').style.display='none';
  // Auto-select Ground (G) visually
  const gBtn = document.querySelector('.floor-btn[data-floors="1"]');
  if (gBtn) gBtn.classList.add('selected');

  // Location change - update hidden input
  document.getElementById('location').addEventListener('change', function() {
    document.getElementById('locationInput').value = this.value;
  });

  // Plot area type change
  document.getElementById('plotAreaType').addEventListener('change', function() {
    const customArea = document.getElementById('customPlotArea');
    if (this.value === 'custom') {
      customArea.style.display = 'block';
    } else {
      customArea.style.display = 'none';
    }
    updateCostCalculation();
  });
  const plotAreaSelect = document.getElementById('plotAreaType');
const customAreaDiv  = document.getElementById('customPlotArea');

// show/hide on change
plotAreaSelect.addEventListener('change', () => {
  const isCustom = plotAreaSelect.value === 'custom';
  customAreaDiv.hidden = !isCustom;
  updateCostCalculation();
});

// if the page reloads with "custom" selected (back/forward cache)
if (plotAreaSelect.value === 'custom') {
  customAreaDiv.hidden = false;
}

  // Custom dimension input listener
  const customDimInput = document.getElementById('customDimension');
  if (customDimInput) {
    customDimInput.addEventListener('input', updateCostCalculation);
  }

  // Package selection
  document.querySelectorAll('.package-card').forEach(card => {
    card.addEventListener('click', function() {
      document.querySelectorAll('.package-card').forEach(c => c.classList.remove('selected'));
      this.classList.add('selected');

      selectedPackage = this.dataset.package;
      pricePerSqft = parseInt(this.dataset.price, 10);

      updateCostCalculation();
    });
  });

  // Floor selection
  document.querySelectorAll('.floor-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.floor-btn').forEach(b => b.classList.remove('selected'));
      this.classList.add('selected');

      selectedFloors = parseInt(this.dataset.floors, 10);

      updateCostCalculation();
    });
  });

  function parsePlotArea() {
    const type = document.getElementById('plotAreaType').value;
    if (type === 'custom') {
      const dim = (document.getElementById('customDimension').value || '').trim();
      const m = dim.match(/^(\d+)\s*x\s*(\d+)$/i);
      if (!m) return '';
      const L = parseInt(m[1], 10), W = parseInt(m[2], 10);
      if (!L || !W) return '';
      return `${L}x${W}`;
    }
    return type || '';
  }

  function updateCostCalculation() {
    if (!selectedPackage || pricePerSqft <= 0) return;

    const plotArea = parsePlotArea();
    if (!plotArea) return;

    const areaMatch = plotArea.match(/(\d+)x(\d+)/);
    if (!areaMatch) return;

    const length = parseInt(areaMatch[1], 10);
    const width  = parseInt(areaMatch[2], 10);

    // Reduce ₹25/sqft from G+2 onwards
    const effectivePrice = Math.max(0, pricePerSqft - (selectedFloors >= 3 ? 25 : 0));

    const totalArea     = length * width * selectedFloors;
    const estimatedCost = totalArea * effectivePrice;

    // Update hidden inputs used in final step
    document.getElementById('selectedPackageInput').value = selectedPackage;
    document.getElementById('selectedFloorsInput').value  = selectedFloors;
    document.getElementById('estimatedCostInput').value   = estimatedCost;
    document.getElementById('pricePerSqftInput').value    = effectivePrice;
    document.getElementById('totalAreaInput').value       = totalArea;
    document.getElementById('plotAreaInput').value        = plotArea;
  }

  // Form validation is no longer needed since we're inserting data via AJAX
});

function insertEnquiryData() {
  // Create form data for AJAX submission
  const formData = new FormData();
  formData.append('fullName', document.getElementById('fullName').value);
  formData.append('email', document.getElementById('email').value);
  formData.append('phone', document.getElementById('phone').value);
  formData.append('address', document.getElementById('address').value);
  formData.append('selectedPackage', document.getElementById('selectedPackageInput').value);
  formData.append('plotArea', document.getElementById('plotAreaInput').value);
  formData.append('selectedFloors', document.getElementById('selectedFloorsInput').value);

  // Submit data via AJAX
  fetch(window.location.href, {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log('Enquiry data inserted successfully');
    // Show success message
    showSuccessMessage('Your enquiry has been submitted successfully! We\'ll get back to you soon.');
  })
  .catch(error => {
    console.error('Error inserting enquiry data:', error);
    // showErrorMessage('Error submitting enquiry. Please try again.');
  });
}

function nextStep(currentStep) {
  // Step validations
  if (currentStep === 1) {
    const location = document.getElementById('location').value;
    const plotAreaType = document.getElementById('plotAreaType').value;
    const selectedPackage = document.querySelector('.package-card.selected');
    const selectedFloors = document.querySelector('.floor-btn.selected');

    if (!location || !plotAreaType) {
      alert('Please fill all required fields');
      return;
    }

    if (plotAreaType === 'custom') {
      const dim = (document.getElementById('customDimension').value || '').trim();
      const m = dim.match(/^(\d+)\s*x\s*(\d+)$/i);
      if (!m) {
        alert('Please enter custom dimension in format: 30x40');
        return;
      }
    }

    if (!selectedPackage) {
      alert('Please select a package');
      return;
    }

    if (!selectedFloors) {
      alert('Please select number of floors');
      return;
    }
  }

  if (currentStep === 2) {
    const fullName = document.getElementById('fullName').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;

    if (!fullName || !email || !phone || !address) {
      alert('Please fill all required fields');
      return;
    }

    // Insert data into database when "View Final Quote" is clicked
    insertEnquiryData();
    updateFinalQuote();
  }

  // Move step
  document.getElementById('step' + currentStep).classList.remove('active');
  document.getElementById('step' + (currentStep + 1)).classList.add('active');
  updateProgress(currentStep + 1);
}

function prevStep(currentStep) {
  document.getElementById('step' + currentStep).classList.remove('active');
  document.getElementById('step' + (currentStep - 1)).classList.add('active');
  updateProgress(currentStep - 1);
}

function updateProgress(step) {
  document.querySelectorAll('.step').forEach((s, index) => {
    s.classList.remove('active', 'completed');
    if (index + 1 < step) s.classList.add('completed');
    else if (index + 1 === step) s.classList.add('active');
  });
}

function floorsLabel(n) {
  if (n === 1) return 'G';
  return 'G+' + (n - 1);
}

function downloadFinalQuote() {
  window.print();
}

function updateFinalQuote() {
  // Friendly package label
  const pkgKey = document.getElementById('selectedPackageInput').value;
  const pkgLabel = pkgKey === 'essential' ? 'Standard Package'
                 : pkgKey === 'classic'   ? 'Premium Package'
                 : pkgKey;

  // Project details
  document.getElementById('finalLocation').textContent   = document.getElementById('location').value;
  document.getElementById('finalPlotArea').textContent   = document.getElementById('plotAreaInput').value;
  document.getElementById('finalPackage').textContent    = pkgLabel;
  document.getElementById('finalFloors').textContent     = floorsLabel(parseInt(document.getElementById('selectedFloorsInput').value || '1', 10));

  // Cost breakdown
  document.getElementById('finalTotalArea').textContent  = document.getElementById('totalAreaInput').value;
  document.getElementById('finalPricePerSqft').textContent = 'Rs. ' + document.getElementById('pricePerSqftInput').value + '/Sqft';
  document.getElementById('finalEstimatedCost').textContent = 'Rs. ' + parseInt(document.getElementById('estimatedCostInput').value || '0', 10).toLocaleString();
}

function showSuccessMessage(message) {
  // Create success alert
  const alertDiv = document.createElement('div');
  alertDiv.className = 'alert alert-success alert-dismissible fade show';
  alertDiv.innerHTML = `
    ${message}
    <button type="button" class="btn-close" onclick="this.parentElement.remove()" aria-label="Close"></button>
  `;
  
  // Insert after the page title
  const pageTitle = document.querySelector('.page-title');
  if (pageTitle) {
    pageTitle.parentNode.insertBefore(alertDiv, pageTitle.nextSibling);
  }
}

function showErrorMessage(message) {
  // Create error alert
  const alertDiv = document.createElement('div');
  alertDiv.className = 'alert alert-danger alert-dismissible fade show';
  alertDiv.innerHTML = `
    ${message}
    <button type="button" class="btn-close" onclick="this.parentElement.remove()" aria-label="Close"></button>
  `;
  
  // Insert after the page title
  const pageTitle = document.querySelector('.page-title');
  if (pageTitle) {
    alertDiv.style.marginTop = '20px';
    pageTitle.parentNode.insertBefore(alertDiv, pageTitle.nextSibling);
  }
}
function showCustomPlotArea(){
  document.getElementById('customPlotArea').style.display='block';

}
</script>

<?php include 'layout/footer.php' ?>
