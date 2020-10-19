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
import "jquery-validation";
import { min } from "lodash";
/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// require("./components/Example");
// require("./components/NavBar/Navigation");
// require("./components/HomePageContent/HomePage");

(function() {
    var register = $("#register").on("submit", function(event) {
        const register = $("#register");
        if (register.validate().checkForm()) {
            register.validate({
                rules: {
                    name: {
                        required: true
                    },
                    username: {
                        required: true,
                        min: "5"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    about: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages: {
                    name: {
                        required: "Name is required"
                    },
                    username: {
                        required: "Username is required",
                        min: "Username must be at least 5 characters"
                    },
                    email: {
                        required: "Email is required",
                        email: "Enter valid email address"
                    },
                    about: {
                        required: "About field is required to fill"
                    },
                    password: {
                        required: "Password is required"
                    },
                    password_confirmation: {
                        required: "Confirm your password",
                        equalTo: "Password don`t match"
                    }
                }
            });
        }
    });
})();
