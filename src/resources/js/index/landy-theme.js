import Alpine from "alpinejs";

// fungsi initialize untuk mempersiapkan peta
function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(-8.5830695, 116.3202515),
    zoom: 9,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  };

  var peta = new google.maps.Map(
    document.getElementById("googleMap"),
    propertiPeta
  );
}

function loadDataContent() {
  return {
    navbar: null,
    listnavbar:null,
    content: null,
    landingpage: null,
    story:null,
    liststory:null,
    service:null,
    listservice:null,
    video:null,
    portfolio:null,
    listportfolio:null,
    pricing:null,
    listpricing:null,
    team:null,
    infocontent:null,
    review:null,
    latestnews:null,
    client:null,
    listclient:null,
    contact:null,
    footer:null,
    listfooter:null,

    slug: ["landy"],

    loadLandingPage() {
      fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.value;
          this.navbar = this.content.navbar.data;
          this.listnavbar = this.navbar.listnavbar.data;
          this.landingpage = this.content.landingpage.data;
          this.story = this.content.storycontent.data;
          this.liststory = this.story.listtab.data;
          this.service = this.content.service.data;
          this.listservice = this.service.listservice.data;
          this.video = this.content.video.data;
          this.portfolio = this.content.portfolio.data;
          this.listportfolio = this.portfolio.listtabportfolio.data;
          this.pricing = this.content.pricing.data;
          this.listpricing = this.pricing.listprice.data;
          this.team = this.content.team.data;
          this.infocontent = this.content.information.data;
          this.review = this.content.review.data;
          this.latestnews = this.content.news.data;
          this.client = this.content.client.data;
          this.listclient = this.client.listclient.data;
          this.contact = this.content.contact.data;
          this.footer = this.content.footer.data;
          this.listfooter = this.footer.namefooter1.data;
          console.log(this.listfooter, "coba");
        });
    },
  };
}

// event jendela di-load
google.maps.event.addDomListener(window, "load", initialize);

window.initialize = initialize;
window.loadDataContent = loadDataContent;

window.Alpine = Alpine;
Alpine.start();
