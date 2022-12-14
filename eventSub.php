
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Submission Form</title>
    <link rel="stylesheet" href="eventSub.css">
</head>
<body>
    <img src="wave.png" alt="waves">
    <h3>EVENT SUBMISSION FORM</h3>
    <div class="form-event">
        <section id="form-event">
            <form action="index.html" method="post">
                <div class="row">
                    <div class="column" id="left">
                        <input type="text" placeholder="Event Name" name="event-name" required><br><br>
                        <input type="text" placeholder="Club/Association" name="club-name" required><br><br>
                        <input type="text" placeholder="Type of Event" name="event-type" required><br><br>
                        <input type="datetime-local" placeholder="Date & Time" name="date-time" required><br><br>
                        <input type="text" placeholder="Registration link" name="Registration" required><br><br>
                    </div> 
                    <div class="column" id="right">
                        <input type="text" placeholder="Venue Location" name="venue-loc" required><br><br>
                        <input type="text" placeholder="Contact No." name="contact-no" required><br><br>
                        <input type="text" placeholder="Description" name="desc" required><br><br>
                        <input type="file" placeholder="Upload Poster" name="poster" required><br><br>
                        <input type="submit" name="submit" value="submit" id="form-btn"></button>

                    </div>
                </div> 
            </form>
        </section>
    </div>
    
</body>
</html>