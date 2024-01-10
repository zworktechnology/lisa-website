<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lisa | Terms and Conditions</title>
    <link rel="icon" href="images\Lisa Final Logo File_page-0001.jpg" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            overflow-x: hidden !important
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        body {
            background: lightgrey;
            display: flex;
            justify-content: center;
        }


        .page {
            padding: 50px 80px;
            margin: 50px;
            background: white;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
            max-width: 800px;
            min-width: 500px;
        }

        @media only screen and (max-width: 1200px) {
            body {
                background: lightgrey;
                display: flex;
                justify-content: center;
            }

            /*Tablets [601px -> 1200px]*/
            .page {
                padding: 50px 80px;
                margin: 50px;
                background: white;
                box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
                max-width: 800px;
                min-width: 500px;
            }
        }

        @media only screen and (max-width: 600px) {
            body {
                background: lightgrey;
                display: flex;
                justify-content: center;
            }

            /*Big smartphones [426px -> 600px]*/
            .page {
                padding: 50px 80px;
                margin: 50px;
                background: white;
                box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
                max-width: 800px;
                min-width: 500px;
            }
        }

        @media only screen and (max-width: 425px) {
            body {
                background: lightgrey;
                display: flex;
                justify-content: center;
                width: 90% !important;
            }

            /*Small smartphones [325px -> 425px]*/
            .page {
                padding: 30px 40px;
                margin: 50px;
                background: white;
                box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
                max-width: 90%;
                min-width: 90%;
            }
        }

        #terms-and-conditions {
            font-size: 16px; // default

            h1 {
                font-size: 34px;
            }

            ol {
                counter-reset: item;
            }

            li {
                padding: 20px !important;
                margin: 20px 0 !important;
            }

        }
    </style>
</head>

<body class="antialiased  overflow-x-hidden">
    <div class="page">
        <div id="terms-and-conditions">
            <h1>Terms & Conditions</h1>
            <ol>
                <li>
                    <b>Acceptance of Terms:</b>
                    <ul>
                        <li>
                            By accessing and using our website, you agree to be bound by these terms and conditions.
                        </li>
                    </ul>
                </li>
                <br />

                <li>
                    <b>Use of the Website:</b>
                    <ul>
                        <li>
                            You must use the website by all applicable laws and regulations. Any use of the website for
                            illegal or unauthorized purposes is strictly prohibited.
                        </li>
                    </ul>
                </li>
                <br />

                <li>
                    <b>Intellectual Property:</b>
                    <ul>
                        <li>
                            All content on the website, including text, images, graphics, logos, and trademarks, is the
                            property of LISA Enterprise and is protected by intellectual property laws. You may not
                            reproduce, distribute, or use any content without our prior written consent.
                        </li>
                    </ul>
                </li>
                <br />

                <li>
                    <b>Modification of Terms:</b>
                    <ul>
                        <li>
                            We reserve the right to update or modify these terms and conditions at any time without
                            prior notice.
                        </li>
                    </ul>
                </li>
                <br />

                <li>
                    <b>Pricing and Payment:</b>
                    <ul>
                        <li>
                            Prices for products are as listed on the website. The payment for the items shall be made
                            during check-out.
                            Terms of Sale
                        </li>
                    </ul>
                </li>
                <br />
            </ol>
            <p>This Site offers for sale sanitary pads. By accessing the Site or purchasing the Products you agree to
                the terms and conditions set.</p>
        </div><!--  end #terms-and-conditions  -->
    </div><!--  end .page  -->
</body>

</html>
