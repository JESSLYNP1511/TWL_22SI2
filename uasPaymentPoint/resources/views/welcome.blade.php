<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Point</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #FF2D20, #FF5733);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        header p {
            font-size: 1rem;
            margin-top: 10px;
        }

        /* Main Content */
        main {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h2 {
            font-size: 1.5rem;
            color: #FF2D20;
            margin-bottom: 10px;
        }

        .card-content p {
            font-size: 1rem;
            color: #555;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Payment Point</h1>
        <p>Simple and Secure Payment Solutions</p>
    </header>

    <main>
        <div class="card">
            <img src="https://www.liveenhanced.com/wp-content/uploads/2020/09/Online-Payment-Gateway-1-1536x1024.jpg" alt="Payment Solutions">
            <div class="card-content">
                <h2>Easy Payment Management</h2>
                <p>Manage all your payments in one place with our intuitive and user-friendly platform. Stay organized and efficient with our tools.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://cdn.educba.com/academy/wp-content/uploads/2019/11/Secure-electronic-Transaction.png" alt="Secure Transactions">
            <div class="card-content">
                <h2>Secure Transactions</h2>
                <p>Your security is our priority. All transactions are encrypted and protected to ensure your data remains safe.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://as2.ftcdn.net/v2/jpg/06/11/69/45/1000_F_611694523_2pTwQbPs4WEaIG39PItfwsDPddAo7uac.jpg" alt="Fast and Reliable">
            <div class="card-content">
                <h2>Fast and Reliable</h2>
                <p>Experience lightning-fast payment processing with our reliable infrastructure. Never worry about delays again.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Payment Point. All rights reserved.</p>
    </footer>
</body>
</html>