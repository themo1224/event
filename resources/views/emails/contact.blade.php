<!DOCTYPE html>
<html>
<head>
    <style>
        /* Basic reset */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #1b6ca8; /* Blue border for contrast */
        }

        h1 {
            color: #1b6ca8; /* Main Blue */
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            background-color: #e8f4fc;
            padding: 10px;
            border-radius: 5px;
        }

        p {
            line-height: 1.6;
            font-size: 16px;
        }

        .data-row {
            padding: 15px 10px;
            border-bottom: 1px solid #eeeeee;
            border-left: 5px solid #1b6ca8; /* Highlight border for each section */
            margin-bottom: 10px;
            background-color: #f2faff;
            border-radius: 5px;
        }

        .data-row p {
            margin: 0;
        }

        .highlight {
            color: #ec407a; /* Vibrant pink for emphasis */
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777777;
        }

        .btn {
            display: inline-block;
            background-color: #1b6ca8;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        /* Mobile responsiveness */
        @media screen and (max-width: 600px) {
            .email-container {
                padding: 15px;
            }
            h1 {
                font-size: 24px;
            }
            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="email-container">
        <h1>Contact Form Submission</h1>

        <!-- Name Section -->
        <div class="data-row">
            <p><strong class="highlight">Name:</strong> {{ $formData['name'] }}</p>
        </div>

        <!-- Email Section -->
        <div class="data-row">
            <p><strong class="highlight">Email:</strong> {{ $formData['email'] }}</p>
        </div>

        <!-- Reason for Contact Section -->
        <div class="data-row">
            <p><strong class="highlight">Reason for Contacting:</strong> {{ $formData['reason'] }}</p>
        </div>

        <!-- Phone Section -->
        <div class="data-row">
            <p><strong class="highlight">Phone:</strong> {{ $formData['phone'] }}</p>
        </div>

        <!-- Message Section -->
        <div class="data-row">
            <p><strong class="highlight">Message:</strong> {{ $formData['message'] }}</p>
        </div>

        <div class="footer">
            <p>you can replay by this button</p>
            <a href="mailto:{{ $formData['email'] }}" class="btn">Reply to {{ $formData['name'] }}</a>
        </div>
    </div>

</body>
</html>
