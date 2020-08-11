<style>
   .searcher {
      /* background-color: #05132d; */
      color: #05132d;
      width: 60%;
      height: 70px;
      font-weight: bold;
      font-size: 30px;
      /* border-radius: 15px; */
      margin: 10%; 
      margin-top: 220px;
      margin-left: 20%;
      border: solid transparent;
            border-top-left-radius: 1.3rem;
            border-bottom-right-radius: 1.3rem; 
  
   }
</style>

<script>
   function SelectRedirect() {
      // ON selection of section this function will work
      alert( document.getElementById('s1').value);

      switch (document.getElementById('s1').value) {
         case "fitness":
            window.location = "/fitness";
            break;

         case "tech":
            window.location = "/tech";
            break;

         case "tutor":
            window.location = "/tutor";
            break;
         case "corporate":
            window.locatiion = "/corporate";
            break;

         case "artisan":
            window.location = "/crafts";
            break;

         case "furniture":
            window.location = "/furniture";
            break;

         case "repair":
            window.location = "/repair";
            break;

         case "security":
            window.location = "/security";
            break;

         case "event":
            window.location = "/event";
            break;

         case "installation":
            window.location = "/installation";
            break;

         case "lifestyle":
            window.location = "/lifestyle";
            break;

            /// Can be extended to other different selections of SubCategory //////
         default:
            window.location = "/"; // if no selection matches then redirected to home page
            break;
      } // end of switch 
   }
   //////////////////  
</script>

<section>
   <SELECT id="s1" class="searcher" NAME="section" onChange="SelectRedirect();">

   <Option value=" ">Search For Credible Professionals</Option>
   <Option value=" tech.blade.php">Science And Technological Services</Option>
      <Option value="fitness.blade.php">Fitness And Wellness</Option>
      <Option value="education.blade.php">Educational Services</Option>
      <Option value="corporate.blade.php">Corporate Services</Option>
      <Option value="crafts.blade.php">Arts And Crafts Technicians</Option>
      <Option value="furniture.blade.php">Furniture And Fixtures</Option>
      <Option value="repair.blade.php">Repairs And Technical Support</Option>
      <Option value="security.blade.php">Private Security Services</Option>
      <Option value="event.blade.php">Event Handlers</Option>
      <Option value="installation.blade.php">Installation Technicians</Option>
      <Option value="lifestyle.blade.php">Beauty And Lifestyle </Option>
      <Option value="construction.blade.php"> Architecture And Construction </Option>
      <Option value="business.blade.php">Business Management And Administrative Services</Option>
      <Option value="financials.blade.php">Financial Services</Option>
      <Option value="hospitality.blade.php">Hospitality And Tourism</Option>
      <Option value="law&safety.blade.php">Law & Public Safety</Option>
      <Option value="manufacturing.blade.php">Manufacturing</Option>
      <Option value="mkting&sales.blade.php">Marketing And Sales</Option>
      <Option value="distribution.blade.php">Transportation, Distribution And Logistics</Option>


   </SELECT>
</section> 
