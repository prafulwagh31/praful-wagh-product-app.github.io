<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
            .details-snippet1 {
        color: #585656;
    }

    /* Main text uses this styling and color */
    .details-snippet1 .theme-text {
        color: purple;
        font-weight: bold;
    }

    .details-snippet1 .mini-preview img {
        border: 1px solid #585656;
        border: 1px solid purple;
        margin-bottom: 8px;
    }

    .details-snippet1 .title {
        color: #464343;
        font-weight: bold;
        font-size: 2rem;
    }

    .details-snippet1 .price {
        font-weight: bold;
        font-size: 1.8rem;
    }

    .details-snippet1 .original-price {
        font-weight: normal;
        font-size: 20px;
    }

    .brief-description {
        /* color: #585656; */
        color: #464343;
    }


    .select-colors .color {
        display: inline-block;
        border: 1px solid grey;
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin-right: 5px;
        background-color: black;
    }

    .select-colors .color.red {
        background-color: red;
    }

    .select-colors .color.silver {
        background-color: silver;
    }

    .select-colors .color.black {
        background-color: black;
    }



    .addBtn {
        background-color: purple;
        color: white;
        text-transform: uppercase;
    }

    .addBtn:hover {
        background-color: #500150;
        color: white;
    }


    .related-heading {
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
        /* color: #464343; */
    }

    .details-snippet1 .related-title {
        color: #464343;
        font-weight: bold;
    }

    .details-snippet1 .related-price {
        color: #464343;
        font-weight: bold;
    }



    .additional-details .nav-link {
        border: none;
        color: #464343;
    }

    .additional-details .nav-link.active {
        background-color: white;
        color: #464343;
        border: none;
        border-bottom: 4px solid purple;
    }
    </style>
</head>
<body>
    <div class="container my-5">
        <a href="{{ route('admin.register') }}">
            <button type="button" class="btn btn-primary">Admin Register</button>
        </a>
        &nbsp;
        <a href="{{ route('admin.login') }}">
            <button type="button" class="btn btn-secondary">Admin Login</button>
        </a>
        <div class="row details-snippet1">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-10">
                        <div class="product-image">
                            <img class="img-fluid"
                                src="{{ asset($product->image) }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="title">{{ $product->name }}</div>
                <div class="price my-2">{{ $product->amount }}</div>
                <div class="theme-text subtitle">Brief Description:</div>
                <div class="brief-description">
                    {{ $product->description }}
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <input type="number" class="form-control" value="1">
                    </div>
                    <div class="col-md-9"><button class="btn addBtn btn-block">Add to basket</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
