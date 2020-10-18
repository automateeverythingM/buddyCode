/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require("./bootstrap");
window._ = require("lodash");
window.$ = window.jQuery = require("jquery");
window.axios = require("axios");
import "jquery-ui/ui/widgets/autocomplete";
import "bootstrap-tag-input/dist/js";
/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// require("./components/Example");
// require("./components/NavBar/Navigation");
// require("./components/HomePageContent/HomePage");

(function() {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $("#MainSearch").autocomplete({
        source: availableTags,
        delay: 200,
        minLength: 2
    });
    $("#MainSearch").val("hello");
})();
