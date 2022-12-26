import Alpine from "alpinejs";



function loadDataContent() {
  return {
    navbar: null,
    listnavbar: null,
    content: null,
    landingpage: null,
    story: {},
    service: null,
    listservice: null,
    video: null,
    portfolio: {},
    pricing: null,
    listpricing: null,
    team: null,
    infocontent: null,
    review: null,
    latestnews: null,
    client: null,
    listclient: null,
    contact: null,
    footer: null,
    listfooter: null,
    sidebar: null,
    dataPortfolio: [],
    slug: ["landy-theme"],
    category: null,
    variabel: null,
    slice: [],
    slice2: [],
    titletabs: [],
    configuration: [],
    sitetitle: "",
    navbarlogo: "",
    footerlogo: "",
    favicon: "",

    loadLandyContent() {
      fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.value;
          this.navbar = this.content.navbar.data;
          this.listnavbar = this.navbar.menulist.data;
          this.landingpage = this.content.landingpage.data;
          this.story = this.content.about.data;
          this.service = this.content.service.data;
          this.listservice = this.service.servicelist.data;
          this.video = this.content.video.data;
          this.portfolio = this.content.portfolio.data;
          this.pricing = this.content.price.data;
          this.listpricing = this.pricing.list.data;
          this.team = this.content.team.data;
          this.infocontent = this.content.callaction.data;
          this.review = this.content.review.data;
          this.latestnews = this.content.news.data;
          this.client = this.content.client.data;
          this.listclient = this.client.clientlist.data;
          this.contact = this.content.contact.data;
          this.footer = this.content.footer.data;
          this.listfooter = this.footer.footerlist.data;
          this.sidebar = this.content.sidebar.data;

          this.story = {
            image: this.story.image.data,
            heading: this.story.title.data,
            description: this.story.description.data,
            titletab: this.story.titlebutton.data,
            contenttab1: this.story.contenttab.data.content1.data,
            contenttab2: this.story.contenttab.data.content2.data,
            contenttab3: this.story.contenttab.data.content3.data,
          };

          this.portfolio = {
            heading: this.portfolio.title.data,
            subheading: this.portfolio.subtitle.data,
            description: this.portfolio.description.data,
            titletab: this.portfolio.titletab.data,
            contenttab1: this.portfolio.contenttab.data.contenttab1.data,
            contenttab2: this.portfolio.contenttab.data.contenttab2.data,
            contenttab3: this.portfolio.contenttab.data.contenttab3.data,
            contenttab4: this.portfolio.contenttab.data.contenttab4.data,
            contenttab5: this.portfolio.contenttab.data.contenttab5.data,
          };

          document.getElementById("branding_tabs").style.display = "none";
          document.getElementById("marketing").style.display = "none";
          document.getElementById("planning").style.display = "none";
          document.getElementById("research").style.display = "none";
          document.getElementById("contenttab2").style.display = "none";
          document.getElementById("contenttab3").style.display = "none";
        });
    },
    taball() {
      document.getElementById("all_tabs").style.display = "inherit";
      document.getElementById("branding_tabs").style.display = "none";
      document.getElementById("marketing").style.display = "none";
      document.getElementById("planning").style.display = "none";
      document.getElementById("research").style.display = "none";
    },

    tabcategory() {
      document.getElementById("branding_tabs").style.display = "inherit";
      document.getElementById("all_tabs").style.display = "none";
      document.getElementById("marketing").style.display = "none";
      document.getElementById("planning").style.display = "none";
      document.getElementById("research").style.display = "none";
    },
    tab_marketing() {
      document.getElementById("marketing").style.display = "inherit";
      document.getElementById("branding_tabs").style.display = "none";
      document.getElementById("all_tabs").style.display = "none";
      document.getElementById("planning").style.display = "none";
      document.getElementById("research").style.display = "none";
    },
    tab_planning() {
      document.getElementById("planning").style.display = "inherit";
      document.getElementById("branding_tabs").style.display = "none";
      document.getElementById("all_tabs").style.display = "none";
      document.getElementById("marketing").style.display = "none";
      document.getElementById("research").style.display = "none";
    },
    tab_research() {
      document.getElementById("research").style.display = "inherit";
      document.getElementById("branding_tabs").style.display = "none";
      document.getElementById("all_tabs").style.display = "none";
      document.getElementById("marketing").style.display = "none";
      document.getElementById("planning").style.display = "none";
    },
    tab_content1() {
      document.getElementById("contenttab1").style.display = "inherit";
      document.getElementById("contenttab2").style.display = "none";
      document.getElementById("contenttab3").style.display = "none";
    },
    tab_content2() {
      document.getElementById("contenttab2").style.display = "inherit";
      document.getElementById("contenttab1").style.display = "none";
      document.getElementById("contenttab3").style.display = "none";
    },
    tab_content3() {
      document.getElementById("contenttab3").style.display = "inherit";
      document.getElementById("contenttab1").style.display = "none";
      document.getElementById("contenttab2").style.display = "none";
    },

    loadDataConfiguration() {
      fetch(`/badaso-api/v1/configurations/fetch`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.configuration;
          for (let index = 0; index < this.content.length; index++) {
            if (this.content[index]["group"] == "landyTheme") {
              this.configuration = this.content[index]["value"];
              if (this.content[index]["key"] == "landyThemeSiteTitle") {
                this.sitetitle = this.content[index]["value"];
              } else if (this.content[index]["key"] == "landyThemeFavicon") {
                this.favicon = this.content[index]["value"];
              } else if (this.content[index]["key"] == "landyThemeNavbarIcon") {
                this.navbarlogo = this.content[index]["value"];
              } else if (this.content[index]["key"] == "landyThemeFooterIcon") {
                this.footerlogo = this.content[index]["value"];
              }
            }
          }

          let favicon = document.getElementById("favicon");
          favicon.href = this.favicon;
        });
    },
  };
}

function isEmail(value) {
  return new RegExp("^\\S+@\\S+[\\.][0-9a-z]+$").test(
    String(value).toLowerCase()
  );
}

function contactForm() {
  return {
    formData: {
      name: "",
      phone: "",
      email: "",
      subject: "",
      message: "",
    },

    loading: false,
    buttonLabel: "Send Message",

    submitForm() {
      if (
        !this.formData.name.length ||
        !this.formData.email.length ||
        !this.formData.phone.length ||
        !this.formData.subject.length ||
        !this.formData.message.length
      ) {
        alert("Please fill out all required field and try again!");
        return;
      }

      this.buttonLabel = "Submitting...";
      this.loading = true;
      fetch("/badaso-api/theme/landy/v1/landy/sendemail", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formData),
      })
        .then((response) => {
          if (response.ok) {
            (this.formData.name = ""),
              (this.formData.email = ""),
              (this.formData.phone = ""),
              (this.formData.subject = ""),
              (this.formData.message = ""),
              alert("Thank you for your message!");
          } else {
            throw new Error(`Something went wrong: ${response.statusText}`);
          }
        })
        .catch((errors) => console.error(errors))
        .finally(() => {
          this.loading = false;
          this.buttonLabel = "Send Message";
        });
    },
  };
}

function subscribe() {
  return {
    formData: {
      email: "",
    },

    loading: false,

    submitemail() {
      if (!this.formData.email.length) {
        alert("Please fill out all required field and try again!");
        return;
      }
      this.loading = true;
      fetch("/badaso-api/theme/landy/v1/landy/subscribe", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formData),
      })
        .then((response) => {
          if (response.ok) {
            (this.formData.email = ""), alert("Thank you for your message!");
          } else {
            throw new Error(`Something went wrong: ${response.statusText}`);
          }
        })
        .catch((errors) => console.error(errors))
        .finally(() => {
          this.loading = false;
          this.buttonLabel = "Send Message";
        });
    },
  };
}

const splash = document.querySelector(".splash");
document.addEventListener("DOMContentLoaded", (e) => {
  setTimeout(() => {
    splash.classList.add("display-none");
  }, 2000);
});

// event jendela di-load
google.maps.event.addDomListener(window, "load", initialize);

// Get the button
let mybutton = document.getElementById("buttonscroll");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    // document.getElementById("buttonscroll").scrollTop = 0;
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

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

window.initialize = initialize;
window.loadDataContent = loadDataContent;
window.isEmail = isEmail;
window.contactForm = contactForm;
window.subscribe = subscribe;
window.topFunction = topFunction;

window.Alpine = Alpine;
Alpine.start();
