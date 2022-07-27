<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
<head>
   @include('landy-theme::components.jaya-header')
</head>

<body x-data="checkAuth()" x-init="auth()">

<div class="container lg:mx-auto max-w-[996px] w-full font-karla">
    <div class="hidden lg:flex">
   @include('landy-theme::components.jaya-adsense')
    </div>
    {{-- framebar jaya theme --}}
    @include('landy-theme::components.jaya-framebar')
    @include('landy-theme::components.jaya-navbar')
     <div class="hidden lg:flex">
    @include('landy-theme::components.jaya-adsense2')
     </div>

    @yield('landing-page')

    {{-- card news 2 --}}
     <div class="lg:grid grid-cols-12 gap-4">
            <div class="col-span-8">
                 @yield('content')

            </div>
            <div class="col-span-4">
                @yield('sidebar')
            </div>
    </div>

@yield('bottom-landing-page')

{{-- end-div container --}}
</div>

@include('landy-theme::components.jaya-footer')
 @yield('modal')

</body>

</html>
<script>


    function loadNavbar(){
        return{
            categories:null,
            tags:null,
            topAds:'',
            bottomAds:'',
            loadTopNavbar() {
                fetch(`/badaso-api/module/post/v1/category`)
                .then(response => response.json())
                .then( data => {
                    this.categories = data.data.categories;
                })
            },
            loadTagNavbar() {
                fetch(`/badaso-api/module/post/v1/tag`)
                .then(response => response.json())
                .then( data => {
                    this.tags = data.data.tags;
                })
            },
            loadContentAds(){
                fetch(`/badaso-api/module/content/v1/content/fetch?slug=jaya-ads`)
                .then(res => res.json())
                .then(data => {
                    this.result = data.data
                    this.topAds = this.result.value.navbarAds.data.topAds.data
                    this.bottomAds = this.result.value.navbarAds.data.bottomAds.data

                })
            }
        }
    }
     function loadDataSidebar(){
        return{
            posts:null,
            tags:null,
            hotissues:null,
            category:null,
            dataAds:null,
            result:null,

            loadHot() {
                 fetch(`/badaso-api/module/post/v1/post?page=1&limit=10`)
                .then(res => res.json())
                .then(data => {
                    this.posts = data.data.posts
                    this.hotissues = this.posts.data.slice(0,3)

                })
            },
            loadTop() {
                fetch(`/badaso-api/module/post/v1/post/popular`)
                .then(response => response.json())
                .then( data => {
                    this.posts = data.data.posts;
                })
            },
            loadTag() {
                fetch(`/badaso-api/module/post/v1/tag`)
                .then(response => response.json())
                .then( data => {
                    this.tags = data.data.tags;
                })
            },
            // loadTagDetail() {
            //      fetch(`/badaso-api/module/post/v1/tag/read-slug?slug=${this.slug}`)
            //     .then(response => response.json())
            //     .then( data => {
            //         this.tags = data.data
            //         console.log(this.tags)
            //     })
            // },
            loadMetaInnerContent() {
                fetch(`/badaso-api/module/post/v1/post?page=1&limit=10&category`)
                .then(res => res.json())
                .then(data => {
                    this.posts =  data.data.posts
                    this.category = this.posts.data
                })
            },
            loadHotMobile() {
                 fetch(`/badaso-api/module/post/v1/post?page=1&limit=10`)
                .then(res => res.json())
                .then(data => {
                    this.posts = data.data.posts
                    this.hotissues = this.posts.data.slice(0,4)

                })
            },
            loadSidebarAds(){
                fetch(`/badaso-api/module/content/v1/content/fetch?slug=sidebar-ads`)
                .then(res => res.json())
                .then(data => {
                    this.result = data.data
                    this.dataAds = this.result.value.sidebarAds.data.sidebarRightAds.data

                })
            }
        }
    }

    function loadFooter(){
        return{
            img:'',
            url:'',

            result:null,
            mobile:null,
            slug: ['jaya-theme-social-media', 'jaya-theme-footer', 'jaya-ads'],
            socialMedia(){
                fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
                .then(res => res.json())
                .then(data => {
                    this.result = data.data.value
                })
            },
            loadContentFooter(){
                fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[1]}`)
                .then(res => res.json())
                .then(data => {
                    this.result = data.data.value
                    this.mobile = this.result.first

                })
            }
        }
    }


    function login(){
    return{
        formLogin:{
            email: {
                    value: null,
                    rules: ["required", "email"],
                    validate(callback) {
                        let { isValid, errorMsg } = callback(this);
                        this.isValid = isValid;
                        this.errorMsg = errorMsg;
                    },
                    isValid: null,
                    errorMsg: null
                },
            password:{
                value: null,
                rules: ["required"],
                validate(callback) {
                    let { isValid, errorMsg } = callback(this);
                    this.isValid = isValid;
                    this.errorMsg = errorMsg;
                },
                isValid: null,
                errorMsg: null
            }
        },
        isFormValid: true,
        validationCallback(formLogin) {
        let { value, rules } = formLogin;
        let isValid = Iodine.isValid(value, rules);
        let errorMsg = isValid
        ? null
        : Iodine.getErrorMessage(Iodine.is(value, rules));
        return { isValid, errorMsg };
        },

        token: localStorage.token,
        formMessage:'',
        submitLogin() {
            fetch('/badaso-api/v1/auth/login', {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({email : this.formLogin.email.value, password : this.formLogin.password.value}),
            })
            .then(res => res.json())
            .then(data => {

                this.formLogin.email.value = "";
                this.formLogin.password .value= "";
                document.getElementById("login").innerHTML = "Logout";
                document.getElementById("register").style.visibility = "hidden";
                document.getElementById("register_desktop").style.visibility = "hidden";
                document.getElementById("login_desktop").innerHTML = "Logout";
                document.getElementById('menu').innerHTML = "Add Comment";
                this.formMessage = "Form successfully submitted.";
                localStorage.setItem('token', data.data.accessToken)
                let modal = document.getElementById('my-modal-login');
                modal.setAttribute('class', 'modal')
            })
            }
        }
    }

 function checkAuth(){

     let hidden = false;
        return{
            status : '',
            token : localStorage.token,
            auth(){
                fetch('/badaso-api/v1/auth/user',{
                method:"GET",
                headers: new Headers({
                  'Authorization': 'bearer '+ this.token
                })
                })
                 .then((res) => {
                    if(res.status == 401){
                        this.status = 'LogIn';
                        document.getElementById("menu").innerHTML = "Login for comment";


                    }
                    if (res.status == 200){
                        this.status = 'LogOut' ;
                        document.getElementById("login").innerHTML = "Logout";
                        document.getElementById("register").style.visibility  = "hidden";
                        document.getElementById("login_desktop").innerHTML = "Logout";
                        document.getElementById("register_desktop").style.visibility  = "hidden";


                    }
                })
           },


           closeModal(){
            let modal_signup = document.getElementById('my-modal-signup');
            let modal_login = document.getElementById('my-modal-login');
            let modal_finish = document.getElementById('my-modal-finish');
             modal_finish.setAttribute('class', 'modal')
            modal_signup.setAttribute('class', 'modal')
             modal_login.setAttribute('class', 'modal')

           },

           openModal(){
            let modal_signup = document.getElementById('my-modal-signup');
            modal_signup.setAttribute('class', 'modal modal-open')

           }
        }
    }

    function checkAuth2(){
        let token = localStorage.token;
                fetch('/badaso-api/v1/auth/user',{
                method:"GET",
                headers: new Headers({
                  'Authorization': 'bearer '+ token
                })
                })
                 .then((res) => {
                    if (res.status == 200){
                        localStorage.clear()
                        document.getElementById("login").innerHTML = "Login";
                        document.getElementById("login_desktop").innerHTML = "Login";
                        document.getElementById("menu").innerHTML = "Login for comment";
                        document.getElementById("register").style.visibility = "visible";
                        document.getElementById("register_desktop").style.visibility = "visible";

                    }
                    if(res.status == 401){
                        this.status = 'LogIn';
                         document.getElementById('my-modal-login').setAttribute('class', 'modal modal-open')
                        document.getElementById("menu").innerHTML = "Login for comment";
                        document.getElementById("register").style.visibility = "visible";
                        document.getElementById("register_desktop").style.visibility = "visible";
                    }
                })
            }

     function getData() {
            return {
                formData: {
                    name: "",
                    email: "",
                    username: "",
                    password: "",
                    passwordConfirmation: ""
                },
                status: false,
                loading: false,
                isError: false,
                modalHeaderText: "",
                modalBodyText: "",
                buttonLabel: 'Sign Up',

                isEmail(email) {
                    var re = /\S+@\S+\.\S+/;
                    return re.test(email);
                },

                submitData() {
                    // Ensures all fields have data before submitting
                    if (!this.formData.name.length ||
                        !this.formData.email.length ||
                        !this.formData.username.length ||
                        !this.formData.password.length ||
                        !this.formData.passwordConfirmation.length) {
                        alert("Please fill out all required field and try again!")
                        return;
                    }
                    this.buttonLabel = 'Submitting...'
                    this.loading = true;
                    fetch('/badaso-api/v1/auth/register', {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json, text/plain, */*',
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(this.formData)
                        })
                        .then(res => res.json())
                        .then((data) => {
                            if(data.errors == null)
                            {

                                // localStorage.setItem('token', data.data.accessToken)
                                // localStorage.clear()
                                localStorage.setItem('email', this.formData.email)
                                 document.getElementById('my-modal-verification').setAttribute('class', 'modal modal-open')
                                 document.getElementById('email_user').innerHTML = window.localStorage.getItem('email');

                            }


                        })
                },



            }
        }


        function getVerify() {
            return{
                formVerify:{
                    email:'',
                    token:''
                },

                submitVerify(){
                     let email = localStorage.getItem('email');

                    fetch('/badaso-api/v1/auth/verify', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json, text/plain, */*',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        email,
                        token:this.formVerify.token
                    })

                    })
                .then(res => res.json())
                .then((data) =>{
                     if(data.errors == null){

                        this.formVerify.email = "";
                        this.formVerify.token = "";
                        localStorage.setItem('token', data.data.accessToken)
                         document.getElementById('my-modal-finish').setAttribute('class', 'modal modal-open')
                        document.getElementById('menu').innerHTML = "Add Comment";
                        document.getElementById("register").style.visibility = "hidden";
                        document.getElementById("login").innerHTML = "Logout";
                         document.getElementById("register_desktop").style.visibility = "hidden";
                        document.getElementById("login_desktop").innerHTML = "Logout";


                     }
                    })
                },

            }
        }

        function authverify(){
               let token = localStorage.token;
                fetch('/badaso-api/v1/auth/user',{
                method:"GET",
                headers: new Headers({
                  'Authorization': 'bearer '+ token
                })
                })
                 .then((res) => {
                     if(res.status === 401){
                        this.status = 'LogIn';
                        document.getElementById("menu").innerHTML = "Login for comment";
                    }
                    if (res.status === 200){
                        this.status = 'LogOut' ;
                        document.getElementById("login").innerHTML = "Logout";
                        document.getElementById("register").style.visibility  = "hidden";
                        let modal_signup = document.getElementById('my-modal-signup');
                        let modal_login = document.getElementById('my-modal-login');
                        let modal_verifikasi = document.getElementById('my-modal-verification');
                        let modal_finish = document.getElementById('my-modal-finish');
                        modal_finish.setAttribute('class', 'modal')
                        modal_verifikasi.setAttribute('class', 'modal')
                        modal_signup.setAttribute('class', 'modal')
                        modal_login.setAttribute('class', 'modal')
                    }
                })
        }

        function user(){
            let token = localStorage.token;
            return{
                 username: null,
                 getuser(){
                      fetch('/badaso-api/v1/auth/user',{
                        method:"GET",
                        headers: new Headers({
                        'Authorization': 'bearer '+ this.token
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.username = data.data.user.name
                        // console.log(this.username)
                    })
                 }
            }
        }

function formatDateTime(sDate,FormatType) {
    var lDate = new Date(sDate)

    var month=new Array(12);
    month[0]="January";
    month[1]="February";
    month[2]="March";
    month[3]="April";
    month[4]="May";
    month[5]="June";
    month[6]="July";
    month[7]="August";
    month[8]="September";
    month[9]="October";
    month[10]="November";
    month[11]="December";

    var weekday=new Array(7);
    weekday[0]="Sunday";
    weekday[1]="Monday";
    weekday[2]="Tuesday";
    weekday[3]="Wednesday";
    weekday[4]="Thursday";
    weekday[5]="Friday";
    weekday[6]="Saturday";

    var hh = lDate.getHours() < 10 ? '0' +
        lDate.getHours() : lDate.getHours();
    var mi = lDate.getMinutes() < 10 ? '0' +
        lDate.getMinutes() : lDate.getMinutes();
    var ss = lDate.getSeconds() < 10 ? '0' +
        lDate.getSeconds() : lDate.getSeconds();

    var d = lDate.getDate();
    var dd = d < 10 ? '0' + d : d;
    var yyyy = lDate.getFullYear();
    var mon = eval(lDate.getMonth()+1);
    var mm = (mon<10?'0'+mon:mon);
    var monthName=month[lDate.getMonth()];
    var weekdayName=weekday[lDate.getDay()];

    if(FormatType==1) {
       return mm+'/'+dd+'/'+yyyy+' '+hh+':'+mi;
    } else if(FormatType==2) {
       return weekdayName+', '+monthName+' '+
            dd +', ' + yyyy;
    } else if(FormatType==3) {
       return mm+'/'+dd+'/'+yyyy;
    } else if(FormatType==4) {
       var dd1 = lDate.getDate();
       return dd1+'-'+Left(monthName,3)+'-'+yyyy;
    } else if(FormatType==5) {
        return mm+'/'+dd+'/'+yyyy+' '+hh+':'+mi+':'+ss;
    } else if(FormatType == 6) {
        return mon + '/' + d + '/' + yyyy + ' ' +
            hh + ':' + mi + ':' + ss;
    } else if(FormatType == 7) {
        return  dd + '-' + monthName.substring(0,3) +
            '-' + yyyy + ' ' + hh + ':' + mi + ':' + ss;
    } else if(FormatType == 8) {
        return weekdayName+', '+monthName+' '+
            dd + ' '+ yyyy+ ', ' +hh+':'+mi;
    }

}


</script>

