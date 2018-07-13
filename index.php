<?php include 'header.php';?>
<!--Existing plan starts -->
  <!--Pricing tabs start -->
<div id="Eplans" class="tabcontent">
  <h3>Existing plans home</h3>
  <p></p>

  <!--Pricing tables start -->
  <?php
  include("classes/dbase.php");?>
  <div class="columns">
  <ul class="price">
    <li class="header">SEO</li>
    <li class="grey">Monthly Plans</li>
    <label class="container">Build
  <input type="radio" checked="checked" name="seoradio">
  <span class="checkmark"></span>
</label>
<label class="container">Grow
  <input type="radio" name="seoradio">
  <span class="checkmark"></span>
</label>
<label class="container">Expand
  <input type="radio" name="seoradio">
  <span class="checkmark"></span>
</label>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">SMM</li>
    <li class="grey">Monthly Plans</li>
    <label class="container">Build
  <input type="radio" checked="checked" name="smmradio">
  <span class="checkmark"></span>
</label>
<label class="container">Grow
  <input type="radio" name="smmradio">
  <span class="checkmark"></span>
</label>
<label class="container">Expand
  <input type="radio" name="smmradio">
  <span class="checkmark"></span>
</label>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">PPC</li>
    <li class="grey">Monthly Plan</li>
    <p>
      <label>Ad Budget: Rs</label>
      <input id="ppc1" type="number" placeholder="Amount" oninput="priceConverter1(this.value)" onchange="priceConverter1(this.value)">
    </p>
    <p>+15% media management fees: <span id="agencyFee_ppc"></span></p>
    <p>Total: <span id="output_ppc"></span></p>

    <script>
function priceConverter1(valNum) {
  document.getElementById("agencyFee_ppc").innerHTML=((valNum*15)/100);
  document.getElementById("output_ppc").innerHTML=Number((valNum))+((valNum*15)/100);
}
    </script>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>
<!--Pricing tables end -->
</div>
<!--Existing plan ends-->

<!-- Custom plans section starts -->
<div id="Cplans" class="tabcontent">
  <h3>Custom plans home</h3>
  <p></p>
  <!--Pricing tables start -->
  <div class="columns">
  <ul class="price">
    <li class="header">SEO</li>
    <li class="grey">Monthly Plans</li>
    <div  style="width:200px; height:100px">
    <select>
      <option value="0">1 Landing Page</option>
      <option value="1">2 Landing Pages</option>
      <option value="2">3 Landing Pages</option>
      <option value="3">4 Landing Pages</option>
      <option value="4">5 Landing Pages</option>
      <option value="5">6 Landing Pages</option>
      <option value="6">7 Landing Pages</option>
      <option value="7">8 Landing Pages</option>
      <option value="8">9 Landing Pages</option>
      <option value="9">10 Landing Pages</option>
      <option value="10">15+ Landing Pages</option>
      <option value="11">20+ Landing Pages</option>
      <option value="12">40+ Landing Pages</option>
    </select>
  </div>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">SMM</li>
    <li class="grey">Monthly Plans</li>
    <div  style="width:200px; height:100px">
    <select>
      <option value="0">4 posts per month</option>
      <option value="1">15 posts per month</option>
      <option value="2">30 posts per month</option>
      <option value="3">60 posts per month</option>
    </select>
  </div>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">PPC</li>
    <li class="grey">Monthly Plan</li>
    <p>
      <label>Ad Budget: Rs</label>
      <input id="ppc1" type="number" placeholder="Amount" oninput="priceConverter2(this.value)" onchange="priceConverter2(this.value)">
    </p>
    <p>+15% media management fees: <span id="agencyFee_ppc_custom"></span></p>
    <p>Total: <span id="output_ppc_custom"></span></p>

    <script>
  function priceConverter2(valNum) {
  document.getElementById("agencyFee_ppc_custom").innerHTML=((valNum*15)/100);
  document.getElementById("output_ppc_custom").innerHTML=Number((valNum))+((valNum*15)/100);
  }
    </script>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>
<!--Pricing tables end -->
</div>
<!-- Custom plans section ends -->

<!--Add ons section starts-->

<div id="Addon" class="tabcontent">
  <h3>Add On's home</h3>
  <p>Prices may vary on the type of main package choosen</p>

  <div class="columns">
  <ul class="price">
    <li class="header">Packages</li>
    <li class="grey">Monthly Plans / One Time</li>
    <label class="container">
  <input type="checkbox" checked="checked">
  <span class="checkmark">Web Developement</span>
  <select>
    <option value="0">CMS(Wordpress)</option>
    <option value="1">Custom PHP</option>
  </select>
</label>
<label class="container">
  <input type="checkbox">
  <span class="checkmark">Content Marketing</span>
</label>
<label class="container">
  <input type="checkbox">
  <span class="checkmark">Social Media Promotion</span>
</label>
<label class="container">
  <input type="checkbox">
  <span class="checkmark">Email Marketing</span>
</label>
    <li class="grey"><a href="#" class="button">Add</a></li>
  </ul>
</div>
</div>
  <!--Pricing tab end -->
  <!--Add ons section starts-->

<?php include 'footer.php';?>
