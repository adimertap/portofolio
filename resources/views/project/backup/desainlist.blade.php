<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Experience Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .section {
            width: 48%;
        }
        h2 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
            position: relative;
            padding-left: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        li:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .company-logo {
            position: absolute;
            left: 0;
            top: 5px;
            width: 20px;
            height: 20px;
            background-color: #ddd;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
        }
        .job-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .job-period, .award-date {
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Working experience</h2>
            <ul>
                <li>
                    <div class="company-logo">U</div>
                    <div class="job-title">Product design at Uber</div>
                    <div class="job-period">February 2018 - February 2022</div>
                </li>
                <li>
                    <div class="company-logo">O</div>
                    <div class="job-title">Senior Product design at Qajak</div>
                    <div class="job-period">February 2022 - February 2023</div>
                </li>
                <li>
                    <div class="company-logo">G</div>
                    <div class="job-title">Part time Product design at Google</div>
                    <div class="job-period">February 2023 - Present</div>
                </li>
            </ul>
        </div>
        <div class="section">
            <h2>Awards & Recognition</h2>
            <ul>
                <li>
                    <div class="company-logo">W</div>
                    <div class="job-title">Website of the Day at Awwwards</div>
                    <div class="award-date">7 November 2022</div>
                </li>
                <li>
                    <div class="company-logo">W</div>
                    <div class="job-title">Best Visual Design at Webby Award</div>
                    <div class="award-date">1 January 2023</div>
                </li>
                <li>
                    <div class="company-logo">W</div>
                    <div class="job-title">Site of the Day at Awwwards</div>
                    <div class="award-date">24 August 2022</div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
