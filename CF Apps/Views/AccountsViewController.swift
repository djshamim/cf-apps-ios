import Foundation
import UIKit
import CFoundry

class AccountsViewController: UITableViewController {
    var accounts = [CFAccount]()
    let vendors = Vendor.list
    
    override func viewDidLoad() {
        accounts = AccountStore.list()
        
        if Session.account() == nil {
            Session.account(accounts.first!)
            Alert.showAuthFail(self)
        }
    }
    
    @IBAction func closeClicked(_ sender: AnyObject) {
        dismiss()
    }
}

extension AccountsViewController {
    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return accounts.count
    }
    
    override func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        let account = accounts[indexPath.row]
        if !Session.isCurrent(account) {
            Session.account(account)
        }
        
        dismiss()
    }
    
    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = self.tableView.dequeueReusableCell(withIdentifier: "accountCell")
        let account = accounts[indexPath.row]
        
        let nameLabel = cell?.viewWithTag(1) as! UILabel
        nameLabel.text = vendorName(account.target)
        
        let userLabel = cell?.viewWithTag(2) as! UILabel
        userLabel.text = account.username
        
        let targetLabel = cell?.viewWithTag(3) as! UILabel
        targetLabel.text = account.target
        
        if Session.isCurrent(account) {
            userLabel.textColor = UIColor(red: 0.27, green: 0.62, blue: 0.97, alpha: 1)
        }
        
        return cell!
    }
    
    override func tableView(_ tableView: UITableView, editActionsForRowAt indexPath: IndexPath) -> [UITableViewRowAction]? {
        let action = UITableViewRowAction(style: .normal, title: "Delete", handler: self.deleteRow)
        action.backgroundColor = UIColor.red
        
        return [action]
    }
}

private extension AccountsViewController {
    func dismiss() {
        self.dismiss(animated: true, completion: nil)
    }
    
    func deleteRow(_ action: UITableViewRowAction, indexPath: IndexPath) {
        let deleteAccount = accounts[indexPath.row]
        let isCurrent = Session.isCurrent(deleteAccount)
        
        if accounts.count == 1 {
            Session.logout(false)
        } else {
            Session.reset()
            try! AccountStore.delete(deleteAccount)
            accounts = AccountStore.list()
            
            if isCurrent {
                Session.account(accounts.first!)
            }
        }
        
        self.tableView.reloadData()
    }
    
    func vendorName(_ target: String) -> String {
        let vendor = vendors.filter { v in
            let t = (v as AnyObject).value(forKey: "Target") as! String
            return t == target
        }
        if vendor.count > 0 {
            return (vendor[0] as AnyObject).value(forKey: "Name") as! String
        }
        return "Other"
    }
}
