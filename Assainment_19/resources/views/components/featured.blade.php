<main>
    <div id="featuredList" class="mx-5 pt-10 xl:mx-auto xl:max-w-[1150px]">
        {{-- <h2 class="text-xl font-semibold  mb-9">Featured Posts</h2> --}}
        <div
            class="text-xl font-semibold  mb-9 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
            Featured Posts
        </div>

</main>

<script>
    featuredArticle();
    async function featuredArticle() {
        let URL = "/featuredarticle";

        try {
            const response = await axios.get(URL);
            response.data.forEach((element) => {
                let artid = element.id

                // Date Conversion from Updated At
                // Time value from query builder
                const timeValue = element.updated_at;

                // Convert the time value to a Date object
                const date = new Date(timeValue);

                // Format the date components
                const day = date.getDate().toString().padStart(2, "0");
                const month = (date.getMonth() + 1).toString().padStart(2, "0");
                const year = date.getFullYear().toString();
                const hours = date.getHours() % 12 || 12;
                const minutes = date.getMinutes().toString().padStart(2, "0");
                const amPm = date.getHours() < 12 ? "AM" : "PM";

                // Formatted date string
                const formattedDate = `${day}-${month}-${year}, ${hours}:${minutes}${amPm}`;

                // Use the formatted date in innerHTML



                // Date Conversion from Updated At Ends Here

                document.getElementById('featuredList').innerHTML += (`
            {{-- Each Post Starts Here --}}
        <a href="/post/${artid}" class="group">
            <div
                class=" flex flex-row items-center  bg-slate-100 mb-5 rounded-xl overflow-hidden shadow-md shadow-slate-300 group-hover:shadow-slate-500 group-focus:shadow-slate-500 group-hover:opacity-60">
                <img src="${element['thumbnail']}"
                    alt="Thumbnail" class=" h-36 w-48 object-cover">
                <div class="ml-5 w-3/5 ">
                    <h5 class="font-bold font-serif text-lg">${element['title']}</h5>
                    <div class="flex flex-row">
                        <p class="font-semibold">${element['name']}
                        </p>
                        <span class="mx-3">&middot;</span>
                        <p class="text-cyan-700">${formattedDate}</p>
                    </div>
                    <p class="text-gray-600 w-full h-7 overflow-hidden">${element['content']}</p>
                </div>
            </div>

        </a>
        {{-- Each Post Ends Here --}}
            `)

            });
        } catch (error) {
            alert(error);
        }
    }
</script>
