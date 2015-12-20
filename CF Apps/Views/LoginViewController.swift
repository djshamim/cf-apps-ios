//
//  ViewController.swift
//  CF Commander
//
//  Created by Dwayne Forde on 2015-06-11.
//  Copyright (c) 2015 Dwayne Forde. All rights reserved.
//

import UIKit
import Alamofire
import QuartzCore
import SwiftyJSON

class LoginViewController: UIViewController {
    @IBOutlet weak var usernameField: UITextField!
    @IBOutlet weak var passwordField: UITextField!
    @IBOutlet weak var apiTargetField: UITextField!
    
    @IBOutlet weak var loginButton: UIButton!
    @IBOutlet weak var targetButton: UIButton!
    
    var authEndpoint: String?
    var authError = false
    
    override func viewDidLoad() {
        super.viewDidLoad()
        apiTargetField.text = "https://api.run.pivotal.io"
        
        hideLoginForm()
    }
    
    override func viewDidAppear(animated: Bool) {
        if authError { showAuthAlert() }
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func showLoginForm() {
        UIView.animateWithDuration(1, animations: {
            self.usernameField.alpha = 1
            self.usernameField.transform = CGAffineTransformIdentity
            
            self.passwordField.alpha = 1
            self.passwordField.transform = CGAffineTransformIdentity
            
            self.loginButton.alpha = 1
            self.loginButton.transform = CGAffineTransformIdentity
        })
    }
    
    func hideLoginForm() {
        usernameField.alpha = 0
        usernameField.transform = CGAffineTransformMakeTranslation(0, 50)
        
        passwordField.alpha = 0
        passwordField.transform = CGAffineTransformMakeTranslation(0, 50)
        
        loginButton.alpha = 0
        loginButton.transform = CGAffineTransformMakeTranslation(0, 50)
    }
    
    func hideTargetForm() {
        UIView.animateWithDuration(1, animations: {
            self.apiTargetField.alpha = 0
            self.apiTargetField.transform = CGAffineTransformMakeTranslation(0, -50)
            
            self.targetButton.alpha = 0
            self.targetButton.transform = CGAffineTransformMakeTranslation(0, -50)
        })
    }
        
    func showAuthAlert() {
        let alert = UIAlertController(title: "Authentication Failed", message: "There was an error authenticating. Please try again.", preferredStyle: UIAlertControllerStyle.Alert)
        let alertAction = UIAlertAction(title: "OK", style: UIAlertActionStyle.Default) { (UIAlertAction) -> Void in }
        alert.addAction(alertAction)
        presentViewController(alert, animated: true) { () -> Void in }
    }
    
    @IBAction func loginPushed(sender: UIButton) {
        CFApi.login(usernameField.text!, password: passwordField.text!, success: {
            self.performSegueWithIdentifier("loginSegue", sender: nil)
        }, error: {
            self.passwordField.layer.borderColor = UIColor.redColor().CGColor
            self.passwordField.layer.borderWidth = 1
            self.passwordField.layer.masksToBounds = true
        })
    }
    
    @IBAction func targetPushed(sender: AnyObject) {
        Alamofire.request(CF.Info())
            .validate()
            .responseJSON { (_, _, result) in
                if (result.isSuccess) {
                    let json = JSON(result.value!)
                    self.authEndpoint = json["authorization_endpoint"].string
                    self.hideTargetForm()
                    self.showLoginForm()
                } else {
                    self.apiTargetField.layer.borderColor = UIColor.redColor().CGColor
                    self.apiTargetField.layer.borderWidth = 1
                    self.apiTargetField.layer.masksToBounds = true
                }
        }
    }
}