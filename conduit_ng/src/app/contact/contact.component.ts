import { Component, OnInit } from "@angular/core";
import { FormBuilder, FormGroup, FormControl } from "@angular/forms";
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

    this.contactForm = this.fb.group({
          name: '',
          email: '',
          coment: ''
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
    
    this.contactService.sendEmail(this.contactForm.value).subscribe(data => {
      console.log("----------res sendEmail",data);
      this.isSubmitting = false;
      /* this.router.navigateByUrl("/"); */
    });
  }
}
