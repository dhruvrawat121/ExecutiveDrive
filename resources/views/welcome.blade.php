<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Rounded Corners and Line in the Middle</title>
    <style>
        table {
            width: 100%;
            border-collapse: separate; /* Allows for rounded corners */
            border-spacing: 0; /* Ensures no gaps between cells */
            border: 2px solid #ccc; /* Adds a border around the table */
            border-radius: 10px; /* Rounds the corners */
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc; /* Border between rows */
        }

        /* Add vertical line in the middle */
        td:first-child {
            border-right: 1px solid #ccc; /* Vertical line between columns */
        }

        /* Remove unnecessary borders */
        td:last-child {
            border-right: none; /* No right border on the last column */
        }

        tr:last-child td {
            border-bottom: none; /* Remove bottom border for the last row */
        }

        /* Adding specific border-radius for the corners */
        table tr:first-child td:first-child {
            border-top-left-radius: 10px; /* Top-left corner */
        }

        table tr:first-child td:last-child {
            border-top-right-radius: 10px; /* Top-right corner */
        }

        table tr:last-child td:first-child {
            border-bottom-left-radius: 10px; /* Bottom-left corner */
        }

        table tr:last-child td:last-child {
            border-bottom-right-radius: 10px; /* Bottom-right corner */
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <td>
                <label for="from">From:</label>
                <input type="text" id="from" name="from" placeholder="Address, airport, hotel...">
            </td>
            <td>
                <label for="to">To:</label>
                <input type="text" id="to" name="to" placeholder="Address, airport, hotel...">
            </td>
        </tr>
        <tr>
            <td>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time">
            </td>
            <td>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
            </td>
        </tr>
    </table>

</body>
</html>
