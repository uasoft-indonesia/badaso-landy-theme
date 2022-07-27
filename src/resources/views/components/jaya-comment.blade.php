<div class="bg-base-100 shadow-none">
    <div class="card-body font-normal font-karla text-lg lg:text-base p-0 mt-6 ml-4 lg:ml-0 mr-4 lg:mr-0">

        <div class="left flex flex-row items-center">
            <h2 class="mb-2">Komentar</h2>
            <div x-data='postData()' x-init="loadCountComment()">
                <span id="commentCount"
                    class="indicator-item badge ml-2 mb-2 bg-gray-200 text-black
                border-none"
                    x-text='commentCount'></span>
            </div>
            <div x-data='postData()' x-init="loadAllComments()">
                <p x-text="postId" id="postId" hidden></p>
            </div>


            <span class="btn-group ml-auto mt-2">
                <div class="grid grid-cols-2 btn-group">
                    <button class="btn btn-xs btn-active lg:btn-sm" x-data="loadData()"
                        x-on:click="loadAsc()">Oldest</button>
                    <button class="btn btn-xs lg:btn-sm" x-data="loadData()" x-on:click="loadDesc()">Newest</button>
                </div>
            </span>
        </div>
        {{-- column comment --}}

        <div x-data="loadData()" x-init="loadComment()" id="sort">
            <template x-for="(comment, index) in comments" :key="index">
                <div>
                    <div class="left flex flex-row items-center text-sm lg:text-base">
                        <div class="user-img h-10 w-10 border rounded-full overflow-hidden mr-4">
                            <img
                                src="https://awsimages.detik.net.id/community/media/visual/2021/07/15/dekorasi-kamar-estetik-ala-korea.png?w=800">
                        </div>
                        <div class="user-name-and-place flex flex-col mt-2">
                            <span class="text-base font-bold" x-text='comment.user.name'>hellen</span>
                            <div class="text-gray-500 text-md sm:text-sm" x-text="formatDateTime(comment.createdAt,8)"></div>
                            <span class="text-sm lg:text-base mt-3" x-text='comment.content'>test kata</span>
                        </div>
                    </div>
                </div>
            </template>

            {{-- textarea comment --}}
            <div class="left flex flex-row items-center mt-2">
                <div class="user-img h-10 w-10 border rounded-full overflow-hidden mr-5">
                    <img
                        src="https://awsimages.detik.net.id/community/media/visual/2021/07/15/dekorasi-kamar-estetik-ala-korea.png?w=800">
                </div>
                <div class="w-full">
                    <div class="form-control">
                        <textarea class="textarea textarea-bordered w-full lg:w-full" placeholder="Write a comment..." id="name"></textarea>
                    </div>
                </div>
            </div>
            <div x-data='user()' x-init="getuser()">
                <p x-text="username" id="usernameId" hidden></p>
            </div>
            <div class="lg:flex  flex-row items-center gap-2 ml-auto justify-end mt-2">
                <div class="left flex flex-row items-center gap-2 justify-end">
                    <button class="btn btn-xs lg:btn-sm bg-black hover:bg-white hover:text-black rounded-md px-3 py-1"
                        id="menu" x-on:click="comment();pushData(comments)">Add Comment</button>

                </div>
            </div>
        </div>



    </div>
</div>

<script>
    function comment() {
        let token = localStorage.token;
        let content = document.getElementById('name').value;
        let postId = document.getElementsByTagName('p')['postId'].innerHTML;
        let userId = document.getElementsByTagName('p')['usernameId'].innerHTML;
        // console.log(content, postId, userId)
        fetch('/badaso-api/v1/auth/user', {
                method: "GET",
                headers: new Headers({
                    'Authorization': 'bearer ' + token
                }),
            })
            .then(response => {
                status = response.status;
                if (status == 200) {
                    updateComment(postId, content,userId);

                }
                if (status == 401) {
                    let modal = document.getElementById('my-modal-login');
                    modal.setAttribute('class', 'modal modal-open')

                }
            })

    }

    function updateComment(postId, content) {
        let token = localStorage.token;
        let updateComment = [];
        fetch(`/badaso-api/module/post/v1/comment/add`, {
                method: 'POST',
                headers: new Headers({
                    'Authorization': 'bearer ' + token,
                    'Content-type': 'application/json; charset=UTF-8',
                }),
                body: JSON.stringify({
                    postId: postId,
                    content: content
                })
            })
            .then(response => response.json())
            .then(data => {
                updateComment = data.data;
                loadDesc();
                document.getElementById('name').value = '';
            });
    }

    function loadAsc()
    {
        document.getElementById('sort').setAttribute('x-init', 'loadAsctest()');

     }

     function loadDesc() {
        document.getElementById('sort').setAttribute('x-init', 'loadDesctest()');
    }

    function loadData() {
        let token = localStorage.token
        return {
            data: null,
            comments: null,
            name:null,
            loadComment() {
                fetch(`/badaso-api/module/post/v1/comment/post?slug=${slug[1]}&page=1&per_page=10&sort=desc`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.comments = data.data.comments.data
                    })

            },
             loadAsctest() {
                fetch(`/badaso-api/module/post/v1/comment/post?slug=${slug[1]}&page=1&per_page=10&sort=asc`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.comments = data.data.comments.data;
                    })
            },
            loadDesctest() {
                fetch(`/badaso-api/module/post/v1/comment/post?slug=${slug[1]}&page=1&per_page=10&sort=desc`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(response => response.json())
                    .then(data => {

                        this.comments = data.data.comments.data;


                    })
            },


        }
    }


    function pushData(data) {
        let token = localStorage.token
        fetch('/badaso-api/v1/auth/user', {
                method: "GET",
                headers: new Headers({
                    'Authorization': 'bearer ' + token
                }),
            })
            .then(response => {
                status = response.status;
                if (status == 200) {
                    data.push({

                        content: document.getElementById('name').value,
                        createdAt: new Date(),
                        postId: document.getElementsByTagName('p')['postId'].innerHTML,
                        user: {
                            name: document.getElementsByTagName('p')['usernameId'].innerHTML
                        }
                    });
                    let countComment = parseInt(document.getElementById('commentCount').innerHTML) + 1;
                    document.getElementById('commentCount').innerHTML = countComment;
                }
            })

    }








</script>
