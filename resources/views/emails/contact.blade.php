<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        /* Reset and layout styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(to bottom right, #1e293b, #334155, #1e293b);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        h1 {
            font-size: 2.2rem;
            background: linear-gradient(to right, #14b8a6, #3b82f6);
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
        }
        p {
            font-size: 1rem;
            color: #94a3b8;
            margin-bottom: 1.5rem;
        }
        .content {
            display: grid;
            gap: 20px;
            text-align: left;
        }
        .field {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #334155;
        }
        .field label {
            font-weight: bold;
            color: #3b82f6;
            display: block;
            margin-bottom: 5px;
        }
        .field .value {
            font-size: 0.9rem;
            color: #ffffff;
        }
        .social {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        .social a {
            color: #94a3b8;
            font-size: 1.3rem;
            transition: color 0.3s;
        }
        .social a:hover {
            color: #14b8a6;
        }

        /* Mobile responsive styles */
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            h1 {
                font-size: 1.8rem;
            }
            p {
                font-size: 0.9rem;
            }
            .field .value {
                font-size: 0.8rem;
            }
            .social a {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Get in Touch</h1>
    <p>Let's create something amazing together.</p>

    <div class="content">
        <div class="field">
            <label>Name</label>
            <div class="value">{{ $data['name'] }}</div>
        </div>
        <div class="field">
            <label>Email</label>
            <div class="value">{{ $data['email'] }}</div>
        </div>
        <div class="field">
            <label>Message</label>
            <div class="value">{{ $data['message'] }}</div>
        </div>
    </div>


</div>

</body>
</html>
