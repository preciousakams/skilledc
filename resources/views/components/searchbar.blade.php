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
      // alert( document.getElementById('s1').value);

      switch (document.getElementById('s1').value) {
         case "fitness":
            window.location ="/fitness";
            break;

         case "tech":
            window.location = "/tech";
            break;

         case "education":
            window.location = "/education";
            break;
            case "corporate":
            window.location = "/corporate";
            break;
            corporate
         case "crafts":
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

            case "construction":
            window.location = "/construction";
            break;

            case "business":
            window.location = "/business";
            break;

            case "financials":
            window.location = "/financials";
            break;

            case "hospitality":
            window.location = "/hospitality";
            break;

            case "law&safety":
            window.location = "/law&safety";
            break;

            case "manufacturing":
            window.location = "/manufacturing";
            break;

            case "mkting&sales":
            window.location = "/mkting&sales";
            break;

            case "distribution":
            window.location = "/distribution";
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

   <Option value="" class="sea" >Search For Credible Professionals</Option>
   <Option value="tech">Science And Technological Services</Option>
      <Option value="fitness">Fitness And Wellness</Option>
      <Option value="education">Educational Services</Option>
      <Option value="corporate">Corporate Services</Option>
      <Option value="crafts">Arts And Crafts Technicians</Option>
      <Option value="furniture">Furniture And Fixtures</Option>
      <Option value="repair">Repairs And Technical Support</Option>
      <Option value="security">Private Security Services</Option>
      <Option value="event">Event Handlers</Option>
      <Option value="installation">Installation Technicians</Option>
      <Option value="lifestyle">Beauty And Lifestyle </Option>
      <Option value="construction"> Architecture And Construction </Option>
      <Option value="business">Business Management And Administrative Services</Option>
      <Option value="financials">Financial Services</Option>
      <Option value="hospitality">Hospitality And Tourism</Option>
      <Option value="law&safety">Law & Public Safety</Option>
      <Option value="manufacturing">Manufacturing</Option>
      <Option value="mkting&sales">Marketing And Sales</Option>
      <Option value="distribution">Transportation, Distribution And Logistics</Option>


   </SELECT>
</section> 


