<section>
    <div class="w-full h-96 mt-6 bg-cover bg-center bg-no-repeat  flex flex-col justify-center items-center"
        style="background-image: url('{{ $post->thumbnail }}'); opacity: 95%;">
        <p id="hero-date" class="text-slate-400 text-xl"></p>
        <p class="text-3xl text-white max-w-[1200px] mt-3 text-center">{{ $post->title }}</p>
        <div class="flex flex-row justify-between items-center mt-5 bg-gray-300 rounded-lg p-1 pr-3 bg-opacity-40">
            <img src="{{ $post->img}}"
                alt="Author Image" class="w-14 h-14 rounded-full m-1 ring ring-green-500">
            <div class="flex flex-col ml-5">
                <p class="text-white text-lg ">Author</p>
                <p class="text-xl text-white ">{{ $post->name }}</p>
            </div>
        </div>

    </div>


</section>

<script>
    herodate();
    function herodate() {
     // Date Conversion from Updated At
    // Time value from query builder
    const timeValue = JSON.parse('<?php echo json_encode($post->updated_at); ?>');

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
document.getElementById('hero-date').innerHTML = formattedDate;


// Date Conversion from Updated At Ends Here
    }
</script>
