<!DOCTYPE html>
<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" href="{{ webroot }}style/global.css">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous"></script>
        <div id="banner">
            ACCOUNT
        </div>
        <header class="well">
            {% if app.session.has('id') %}
                <div class="loggedin">
                    <p>You are logged in as {{ app.session.get('name') }}</p>
                    <form name="logout-form" method="post" action="{{ webroot }}logout">
                        <input type="submit" value="Log out">
                    </form>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{ webroot }}settings">SETTINGS</a></li>
                        <li><a href="{{ webroot }}friends">FRIENDS</a></li>
                    </ul>
                </nav>
            {% else %}
                <div class="loggedin">
                    <p>Log in <a href="{{ webroot }}settings">here</a> to see your friends and change your settings.</p>
                </div>
            {% endif %}
        </header>
        <main class="well">
            {% block content %}
            {% endblock %}
        </main>
    </body>
</html>