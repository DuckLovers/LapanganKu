// function validateEmail(email) {
//     const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     return regex.test(email);
// }

// function validatePassword(password) {
//     const uppercaseRegex = /[A-Z]/;
//     const symbolRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
//     return uppercaseRegex.test(password) && symbolRegex.test(password);
// }

// $(document).ready(function() {
//     $("#signUpForm").submit(function(event) {
//         event.preventDefault(); // Hentikan aksi default

//         const email = $("#email").val();
//         const password = $("#password").val();

//         if (!validateEmail(email)) {
//             alert("Email tidak valid.");
//             return false;
//         }

//         if (!validatePassword(password)) {
//             alert("Password harus mengandung setidaknya satu huruf besar dan satu simbol.");
//             return false;
//         }

//         // Jika validasi berhasil, kirim data formulir ke file PHP
//         $.post($(this).attr("action"), $(this).serialize(), function(response) {
//             console.log(response);
//             window.location.href = "../html/index.html"; 
//         });

//         return false;
//     });
// });
