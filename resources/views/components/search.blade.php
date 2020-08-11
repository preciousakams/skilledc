<x-layout>
<style>
   .searcher {
      background-color: #05132d;
      color: #92802E;
      width: 60%;
      height: 70px;
      font-weight: bold;
      font-size: 30px;
      border-radius: 15px;
      margin: 10%; 
      margin-top: 220px;
      margin-left: 20%;
  }
</style>

<section>
   <SELECT id="s1" class="searcher" NAME="section" onChange="SelectRedirect();">
   
            <Option value=" href="/tech">Science And Technological Services</Option>
      <Option value=" href="/fitness">Fitness And Wellness</Option>
      <Option value=" href="/education">Educational Services</Option>
      <Option value=" href="/corporate">Corporate Services</Option>
      <Option value=" href="/crafts">Arts And Crafts Technicians</Option>
      <Option value=" href="/furniture">Furniture And Fixtures</Option>
      <Option value=" href="/repair">Repairs And Technical Support</Option>
      <Option value=" href="/security">Private Security Services</Option>
      <Option value=" href="/event">Event Handlers</Option>
      <Option value=" href="/installation">Installation Technicians</Option>
      <Option value=" href="/lifestyle">Beauty And Lifestyle </Option>
      <Option value=" href="/construction"> Architecture And Construction </Option>
      <Option value=" href="/business">Business Management And Administrative Services</Option>
      <Option value=" href="/financials">Financial Services</Option>
      <Option value=" href="/hospitality">Hospitality And Tourism</Option>
      <Option value=" href="/law&safety">Law & Public Safety</Option>
      <Option value=" href="/manufacturing">Manufacturing</Option>
      <Option value=" href="/mkting&sales">Marketing And Sales</Option>
      <Option value=" href="/distribution">Transportation, Distribution And Logistics</Option>

   </SELECT>
</section> 

<script>
   function SelectRedirect() {
      // ON selection of section this function will work
      //alert( document.getElementById('s1').value);

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

</x-layout>