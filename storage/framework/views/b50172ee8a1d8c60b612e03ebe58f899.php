

<?php $__env->startSection('main-content'); ?>





<head>
    <title>Wather</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- link for custum css  -->
    <!-- <link rel="stylesheet" href="weather.css"> -->
    <style>
        /* start frame work  */

h1,
h6 {
    font-size: 20px;
    color: #1B9C85;
}

.icon-w {
    border: transparent;
    border-radius: 20px;
    color: royalblue;
}

/* end framwork  */




.head {

    border: 2ps solid transparent;
    border-radius: 20px;
    text-align: center;
    background-color: #E3F2C1;
    height: 150px;

}
    </style>


</head>
<body>
    <header>
        <!-- place navbar here -->
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-3"></div>
                <div class="col-6">
                    <!-- <input type="text" name="" id="name" class="form-control " placeholder="Enter the City Name"> -->
                    <select name="name" id="name" class="form-control">
                        <option value="#">-----------------------------Select
                            City---------------------------------------
                        </option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Mymensingh">Mymensingh</option>
                    </select>

                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-2"></div>
                <div class="col-8">
                    <h6><span id="city"></span>,<span class="lead text-5" id="country"></span>
                    </h6>
                </div>
                <div class="col-2"></div>
            </div>
        </div>

    </header>
    <main>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-4">
                    <div class="head">
                        <h1>Today's Temparature</h1>
                        <h4 id="temp"></h4>

                    </div>
                </div>
                <div class="col-4">
                    <div class="head">
                        <h1>Wind Speed</h1>
                        <h4 id="wind"></h4>
                        <p>Km/h</p>

                    </div>
                </div>
                <div class="col-4">
                    <div class="head">
                        <h1>Sky Condation</h1>
                        <h4 id="sky"></h4>
                        <img src="" class="icon-w" id="icon" srcset="" class="w-50 mt-10">

                    </div>
                </div>

            </div>

            <section class="crops-suggestion mt-5  justify-content-center align-items-center">

                <div class="row">
                    <div class="col-3">

                        <div class="form-group mt-3">
                            <input type="text" name="month" id="month" class="form-control" placeholder="Month name"
                                readonly>
                        </div>
                    </div>
                    <div class="col-3">

                        <div class="form-group mt-3">
                            <input type="text" name="agriseason" id="agriseason" class="form-control"
                                placeholder="Agricultural Season" readonly>
                        </div>

                    </div>
                    <div class="col-3">

                        <div class="form-group mt-3">
                            <input type="text" name="season" id="season" class="form-control" placeholder="Season"
                                readonly>
                        </div>

                    </div>
                    <div class="col-3">

                        <div class="form-group mt-3">
                            <input type="text" name="area" id="area" class="form-control" placeholder="Division"
                                readonly>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="form-group mt-3">
                            <input type="text" name="tract" id="tract" class="form-control" placeholder="Tract"
                                readonly>
                        </div>

                    </div>

                </div>
                <!-- <div class="row mt-3 mb-3 text-center">
                    <div class="col-12">
                        <h1>Crops Suggesition</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 mt-3 mb-5">
                        <textarea name="" id="crop" cols="100" rows="5" class="form-control w-100"></textarea>
                    </div>

                    <div class="col-2"></div>

                </div> -->
                <div class="row mt-3 mb-3 text-center">
                    <div class="col-12">
                        <h1>Crops Suggestion</h1>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 mt-3 mb-5">
                        <textarea name="" id="crop" cols="100" rows="5" class="form-control w-100"></textarea>
                    </div>
                    <div class="col-2"></div>
                    </div>

                    <div class="row">
                    <div class="col-12">
                        <h1>Crop Photo Gallery</h1>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div id="gallery" class="row"></div>
                    </div>
                    <div class="col-2"></div>
                </div>



            </section>


        </div>







    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <!-- <script src="weather.js"></script> -->
    <script>
        


// key = 32ae180f5f624d0be422c0e503c5f75c
var city = document.getElementById('name');
city.addEventListener('input', function () {
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" + city.value + "&appid=32ae180f5f624d0be422c0e503c5f75c";
    fetch($url).then(function (response) {
        return response.json();
    }).then(function (data) {

        var res = data.main.temp - 273.15;
        var wind = data.wind.speed * 3.5;
        var sky = data.weather[0].description;

        document.getElementById('temp').innerHTML = Math.ceil(res);
        document.getElementById('wind').innerHTML = Math.ceil(wind);
        document.getElementById('sky').innerHTML = sky.toUpperCase();
        document.getElementById('icon').src = "https://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
        document.getElementById('city').innerHTML = city.value.toUpperCase();
        document.getElementById('country').innerHTML = data.sys.country.toUpperCase();
        // document.getElementById('humadity').innerHTML = data.main.humidity;



        // console.log(res.toFixed(2));


        //suggsition system 
        //intial assigenment od seasons
        const boro = 'Boro season';
        const aman = 'Aman season';
        const aus = 'Aus  season';




        // for area detection 
        // const Rajshahi = ['Bogra', 'Chapainawabganj', 'Joypurhat', 'Naogaon', 'Natore', 'Pabna', 'Rajshahi', 'Sirajganj'];
        // const area = city.value.toUpperCase();
        // Rajshahi.forEach(raj => {
        //     if (area === raj.toUpperCase()) {
        //         document.getElementById('area').value = 'Rajshahi';
        //     }I love you prity
        // });

        const divisions = [{
            name: 'Dhaka Division', cities: ['dhaka', 'faridpur', 'gazipur', 'gopalganj', 'kishoreganj', 'madaripur', 'manikganj', 'munshiganj', 'mymensingh', 'narayanganj', 'narsingdi', 'netrakona', 'rajbari', 'shariatpur', 'sherpur', 'tangail']
        },
        {
            name: 'Chittagong Division',
            cities: ['bandarban', 'brahmanbaria', 'chandpur', 'chittagong', 'comilla', 'cox\'s bazar', 'feni', 'khagrachhari', 'lakshmipur', 'noakhali', 'rangamati']
        },
        {
            name: 'Sylhet Division',
            cities: ['habiganj', 'moulvibazar', 'sunamganj', 'sylhet']
        },
        {
            name: 'Rajshahi Division',
            cities: ['bogra', 'chapainawabganj', 'joypurhat', 'naogaon', 'natore', 'pabna', 'rajshahi', 'sirajganj']
        },
        {
            name: 'Rangpur Division',
            cities: ['dinajpur', 'gaibandha', 'kurigram', 'lalmonirhat', 'nilphamari', 'panchagarh', 'rangpur', 'thakurgaon']
        },
        {
            name: 'Khulna Division',
            cities: ['bagerhat', 'chuadanga', 'jessore', 'jhenaidah', 'khulna', 'kushtia', 'magura', 'meherpur', 'narail', 'satkhira']
        },
        {
            name: 'Barisal Division',
            cities: ['barguna', 'barisal', 'bhola', 'jhalokati', 'patuakhali', 'pirojpur']
        },
        {
            name: 'Mymensingh Division',
            cities: ['jamalpur', 'mymensingh', 'netrakona', 'sherpur']
        }
        ];

        const area = city.value;

        let foundDivision = '';
        for (let i = 0; i < divisions.length; i++) {
            if (divisions[i].cities.includes(area.toLowerCase())) {
                foundDivision = divisions[i].name;
                break;
            }
        }

        document.getElementById('area').value = foundDivision;



        // for the tracts name 

        const tracts = [
            { name: 'Barind Tract', cities: ['Rajshahi', 'Chapainawabganj', 'Naogaon', 'Joypurhat', 'Bogra', 'Pabna', 'Sirajganj'] },
            { name: 'Madhupur Tract', cities: ['Tangail', 'Dhaka', 'Jamalpur', 'Sherpur', 'Mymensingh', 'Netrokona', 'Gazipur', 'Kishoreganj', 'Manikganj'] },
            { name: 'Haor Basin', cities: ['Sunamganj', 'Sylhet', 'Habiganj', 'Moulvibazar', 'Kishoreganj'] },
            { name: 'Coastal Zone', cities: ['Cox\'s Bazar', 'Chittagong', 'Noakhali', 'Feni', 'Lakshmipur', 'Chandpur', 'Rangamati', 'Satkhira', 'Bagerhat', 'Jessore', 'Narail', 'Chuadanga', 'Meherpur', 'Kushtia', 'Magura', 'Jhenaidah', 'Patuakhali', 'Barguna', 'Bhola', 'Pirojpur', 'Barisal', 'Jhalokati'] },
            { name: 'Hill Zone', cities: ['Rangamati', 'Bandarban', 'Khagrachhari'] },
            { name: 'Old Himalayan Piedmont Plain', cities: ['Dinajpur', 'Thakurgaon', 'Panchagarh', 'Nilphamari', 'Lalmonirhat', 'Kurigram', 'Gaibandha', 'Rangpur', 'Joypurhat'] }
        ];

        function findTract(area) {
            for (let i = 0; i < tracts.length; i++) {
                if (tracts[i].cities.includes(area)) {
                    return tracts[i].name;
                }
            }
            return null; // city not found in any tract
        }


        const tract = findTract(area);

        if (tract) {
            // console.log(city + " is in " + tract);
            document.getElementById('tract').value = tract;
        }


        //      i love you Pritum :)





        var trifola = new Date();

        var month = trifola.toLocaleString('default', { month: 'long' });
        console.log(month);
        document.getElementById('month').value = month;

        // var season = trifola.getMonth();
        // if (season >= 1 && season <= 5 || season == 12) {

        //     document.getElementById('agriseason').value = boro;
        //     // document.getElementById('season').value = Summer;

        //     const crops = ['Boro rice', 'Wheat', 'Maize', 'Potato', 'Onion','Tomato', 'Carrot'];

        //     let cropString = '';
        //     for (let i = 0; i < crops.length; i++) {
        //         cropString += crops[i] + " " + ",";
        //     }

        //     document.getElementById('crop').innerHTML = cropString;



        // }
        // var season = trifola.getMonth();
        // if (season >= 1 && season <= 5 || season == 12) {
        //     document.getElementById('agriseason').value = boro;

        //     const crops = ['Boro rice', 'Wheat', 'Maize', 'Potato', 'Onion', 'Tomato', 'Carrot'];

        //     let cropString = '';
        //     let galleryString = '';

        //     for (let i = 0; i < crops.length; i++) {
        //     cropString += crops[i] + ",";
        //     galleryString += `
        //         <div class="col-3">
        //         <h4>${crops[i]}</h4>
        //         <img src="path/to/${crops[i].replace(/\s/g, '')}.jpg" alt="${crops[i]}">
        //         </div>
        //     `;
        //     }

        //     document.getElementById('crop').innerHTML = cropString;
        //     document.getElementById('gallery').innerHTML = galleryString;
        // }
            //  var season = trifola.getMonth();
            // if (season >= 1 && season <= 5 || season == 12) {
            // document.getElementById('agriseason').value = boro;

            // const crops = [
            //         { name: 'Boro rice', image: 'boro.jpg' },
            //         { name: 'Wheat', image: 'wheat.jpg' },
            //         { name: 'Maize', image: 'maize.jpg' },
            //         { name: 'Potato', image: 'potato.jpg' },
            //         { name: 'Tomato', image: 'tomato.jpg' },
            //         // Add more crops with their names and image file names
            //     ];

            // let cropString = '';
            // let galleryString = '';

            // for (let i = 0; i < crops.length; i++) {
            //     cropString += crops[i].name + ",";
            //     galleryString += `
            //     <div class="col-3">
                    
            //         <h4>${crops[i].name}</h4>
            //         <img src="<?php echo e(asset('Front/assets/imgs/crop/${crops[i].image}')); ?>" alt="${crops[i].name}">
            //     </div>
            //     `;
            // }

            // document.getElementById('crop').innerHTML = cropString;
            // document.getElementById('gallery').innerHTML = galleryString;
            // }
            var season = trifola.getMonth();
            if (season >= 1 && season <= 5 || season == 12) {
            document.getElementById('agriseason').value = boro;

            const crops = [
                { name: 'Boro rice', image: 'boro.jpg' },
                { name: 'Wheat', image: 'wheat.jpg' },
                { name: 'Maize', image: 'maize.jpg' },
                { name: 'Potato', image: 'potato.jpg' },
                { name: 'Tomato', image: 'tomato.jpg' },
                // Add more crops with their names and image file names
            ];

            let cropString = '';
            let galleryString = '';

            for (let i = 0; i < crops.length; i++) {
                cropString += crops[i].name + ",";
                galleryString += `
                <div class="col-3">
                    <div class="card">
                    <img src="<?php echo e(asset('Front/assets/imgs/crop/${crops[i].image}')); ?>" class="card-img-top crop-image" alt="${crops[i].name}">
                    <div class="card-body">
                        <h5 class="card-title">${crops[i].name}</h5>
                    </div>
                    </div>
                </div>
                `;
            }

            document.getElementById('crop').innerHTML = cropString;
            document.getElementById('gallery').innerHTML = galleryString;
            }


        //intiall seasons
        const Summer = "Summer Season"
        const Rainy = "Rainy  Season"
        const Autumn = "Autumn  Season"
        const Late_Autumn = "Late Autumn Season"
        const Winter = "Winter  Season"
        const Spring = "Spring  Season"

        const pri = trifola.getMonth();

        if (pri >= 4 && pri <= 6) {
            document.getElementById('season').value = Summer;

        }
        if (pri >= 6 && pri <= 8) {
            document.getElementById('season').value = Rainy;

        }
        if (pri >= 8 && pri <= 10) {
            document.getElementById('season').value = Autumn;

        }
        if (pri >= 10 && pri <= 12) {
            document.getElementById('season').value = Late_Autumn;

        }
        if (pri >= 1 && pri <= 2) {
            document.getElementById('season').value = Winter;

        }
        if (pri > 2 && pri < 4) {
            document.getElementById('season').value = Spring;

        }




    })


})



// $p = "https://api.openweathermap.org/data/2.5/weather?q=Khulna&appid=32ae180f5f624d0be422c0e503c5f75c"; "
// fetch()
/*
{
    "coord": {
        "lon": 89.5672,
        "lat": 22.8135
    },
    "weather": [
        {
            "id": 800,
            "main": "Clear",
            "description": "clear sky",
            "icon": "01n"
        }
    ],
    "base": "stations",
    "main": {
        "temp": 301.95,
        "feels_like": 303.43,
        "temp_min": 301.95,
        "temp_max": 301.95,
        "pressure": 1004,
        "humidity": 57,
        "sea_level": 1004,
        "grnd_level": 1003
    },
    "visibility": 10000,
    "wind": {
        "speed": 2.94,
        "deg": 236,
        "gust": 6.05
    },
    "clouds": {
        "all": 0
    },
    "dt": 1683574748,
    "sys": {
        "country": "BD",
        "sunrise": 1683588267,
        "sunset": 1683635518
    },
    "timezone": 21600,
    "id": 1336135,
    "name": "Khulna",
    "cod": 200
}



*/

    </script>
</body>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/weather.blade.php ENDPATH**/ ?>