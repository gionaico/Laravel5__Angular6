import { Component, OnInit } from "@angular/core";
import { FormBuilder, FormGroup, FormControl, Validators } from "@angular/forms";
import { ActivatedRoute, Router } from "@angular/router";
import { UserService, ContactService } from "../core";


@Component({
  selector: "app-contact-page",
  templateUrl: "./contact.component.html",
  styleUrls: ["./contact.component.css"]
})
export class ContactComponent implements OnInit {
  contactForm: FormGroup;
  errors: Object = {};
  isSubmitting = false;


  constructor(
    private contactService: ContactService,
    private route: ActivatedRoute,
    private router: Router,
    private fb: FormBuilder,
    private userService: UserService) {

    this.contactForm = new FormGroup({
          'name': new FormControl('',  [Validators.required, Validators.minLength(3)]),
      'email': new FormControl('', [Validators.required, Validators.pattern(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/)]),
          'coment': new FormControl('', [Validators.required, Validators.maxLength(150)]),
        });
    }


  isAuthenticated: boolean;

  ngOnInit() {
    this.userService.isAuthenticated.subscribe(authenticated => {
      this.isAuthenticated = authenticated;
      // set the article list accordingly
      if (authenticated) {
        console.log("feed");
      } else {
        console.log("all");
      }
    });
  }
  submitForm() {
    // update the model
    console.log(this.contactForm.value);
    if (this.contactForm.valid) {
      this.contactService.sendEmail(this.contactForm.value).subscribe(data => {
        console.log("----------res sendEmail",data);
        this.isSubmitting = false;
        /* this.router.navigateByUrl("/"); */
      });
    }

  }
}
