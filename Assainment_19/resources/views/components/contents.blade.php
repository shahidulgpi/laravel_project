<section>
    <div class="max-w-[800px] shadow-lg m-auto">
        <p class="text-justify mx-10 mb-0 py-10 leading-loose">{{ $post->content }}
        </p>
        {{-- Comment Section Starts Here --}}
        <p class="text-3xl font-semibold pl-5 pb-5">Comments</p>
        <div id="single-comment" class=" ring-2 ring-gray-600 min-h-[300px] mx-5 rounded-lg shadow-md shadow-cyan-400 p-5">
            {{-- Each Comment --}}



        </div>

        {{-- Comment Section Ends Here --}}

        {{-- form starts here --}}
        <div class="m-5 mx-auto">
            <p class="m-5 mb-0 text-2xl">Comment Here</p>
            <form id="commentForm" class="bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                        Comment:
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="comment" rows="4" placeholder="Enter your comment"></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>


    </div>
</section>

<script>
    // Comment Section
    showcomments();
    async function showcomments() {
        try {
            const response = JSON.parse('<?php echo json_encode($comments); ?>');
            response.forEach((element) => {


                document.getElementById('single-comment').innerHTML += (`
                <div  class="w-max shadow-lg  px-5 py-2 mb-3 lg:max-w-[60%]">
                <span
                    class="text-xl font-semibold  mb-9 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                    ${element.name}
                </span>
                <p  class="mt-2 text-justify">${element.message}</p>
            </div>
            `)

            });
        } catch (error) {
            alert(error);
        }
    }

    // Form Posting Script
    let commentForm = document.getElementById('commentForm');
    commentForm.addEventListener('submit', async (event) => {
                // event.preventDefault();
                let name = document.getElementById('name').value;
                let comment = document.getElementById('comment').value;

                if (name.length === 0 || comment.length === 0) {
                    alert('Please fill all the fields');

                } else {
                    let formdata = {
                        name: name,
                        message: comment
                    }
                    const artid = JSON.parse('<?php echo json_encode($post->id); ?>');
                    let URL = `/addcomment/${artid}`;
                    let result = await axios.post(URL, formdata);

                    if (result.status === 200) {
                        // alert('Your comment has been added');

                    } else {
                        alert('Something went wrong');
                    }
                }
            })
</script>
