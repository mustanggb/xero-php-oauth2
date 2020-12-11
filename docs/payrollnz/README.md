# xero-php-oauth2

This is an early release of Xero PHP sdk generated from Xero API OpenAPI Spec for oAuth 2 (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

Please follow the [README instructions](https://github.com/XeroAPI/xero-php-oauth2/blob/master/README.md) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

  // Init your oAuth2 provider
  $provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => '__YOUR_CLIENT_ID__',   
    'clientSecret'            => '__YOUR_CLIENT_SECRET__',
    'redirectUri'             => '__YOUR_REDIRECT_URI__',  //same as at developer.xero.com/myapps
    'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
    'urlAccessToken'          => 'https://identity.xero.com/connect/token'
  ]);


  // Configure OAuth2 access token for authorization: OAuth2
  $config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');     

  $payrollUkApi = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
  );

  $xeroTenantId = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

  // \XeroAPI\XeroPHP\Models\Accounting\Employee | Request of type Employee
  $employee = new XeroAPI\XeroPHP\Models\PayrollUk\Employee;
  $employee->setFirstName("Fred");
  $employee->setLastName("Potter");
  $employee->setEmail("albus@hogwarts.edu");
  $dateOfBirth = DateTime::createFromFormat('m/d/Y', '05/29/2000');
  $employee->setDateOfBirthAsDate($dateOfBirth);

  $address = new XeroAPI\XeroPHP\Models\PayrollUk\HomeAddress;
  $address->setAddressLine1("101 Green St");
  $address->setCity("London");
  $address->setCountry("United Kingdom");
  $address->setPostalCode("6023");
  $employee->setHomeAddress($address);

  $newEmployees = [];		
  array_push($newEmployees, $employee);  

  try {
      $result = $payrollUkApi->createEmployee($xero_tenant_id, $newEmployees);
      print_r($result);
  } catch (Exception $e) {
      echo 'Exception when calling payrollUkApi->createEmployee: ', $e->getMessage(), PHP_EOL;
  }

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.xero.com/payroll.xro/2.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PayrollNzApi* | [**approveTimesheet**](docs/Api/PayrollNzApi.md#approvetimesheet) | **POST** /Timesheets/{TimesheetID}/Approve | approve a timesheet
*PayrollNzApi* | [**createDeduction**](docs/Api/PayrollNzApi.md#creatededuction) | **POST** /Deductions | create a new deduction
*PayrollNzApi* | [**createEarningsRate**](docs/Api/PayrollNzApi.md#createearningsrate) | **POST** /EarningsRates | create a new earnings rate
*PayrollNzApi* | [**createEmployee**](docs/Api/PayrollNzApi.md#createemployee) | **POST** /Employees | creates employees
*PayrollNzApi* | [**createEmployeeEarningsTemplate**](docs/Api/PayrollNzApi.md#createemployeeearningstemplate) | **POST** /Employees/{EmployeeId}/PayTemplates/earnings | creates employee earnings template records
*PayrollNzApi* | [**createEmployeeLeave**](docs/Api/PayrollNzApi.md#createemployeeleave) | **POST** /Employees/{EmployeeId}/Leave | creates employee leave records
*PayrollNzApi* | [**createEmployeeLeaveSetup**](docs/Api/PayrollNzApi.md#createemployeeleavesetup) | **POST** /Employees/{EmployeeId}/leaveSetup | Allows you to set-up leave for a specific employee. This is required before viewing, configuring and requesting leave for an employee
*PayrollNzApi* | [**createEmployeeLeaveType**](docs/Api/PayrollNzApi.md#createemployeeleavetype) | **POST** /Employees/{EmployeeId}/LeaveTypes | creates employee leave type records
*PayrollNzApi* | [**createEmployeeOpeningBalances**](docs/Api/PayrollNzApi.md#createemployeeopeningbalances) | **POST** /Employees/{EmployeeId}/openingBalances | creates employee opening balances
*PayrollNzApi* | [**createEmployeePaymentMethod**](docs/Api/PayrollNzApi.md#createemployeepaymentmethod) | **POST** /Employees/{EmployeeId}/PaymentMethods | creates employee payment method
*PayrollNzApi* | [**createEmployeeSalaryAndWage**](docs/Api/PayrollNzApi.md#createemployeesalaryandwage) | **POST** /Employees/{EmployeeId}/SalaryAndWages | creates employee salary and wage record
*PayrollNzApi* | [**createEmployment**](docs/Api/PayrollNzApi.md#createemployment) | **POST** /Employees/{EmployeeId}/Employment | creates employment
*PayrollNzApi* | [**createLeaveType**](docs/Api/PayrollNzApi.md#createleavetype) | **POST** /LeaveTypes | create a new leave type
*PayrollNzApi* | [**createMultipleEmployeeEarningsTemplate**](docs/Api/PayrollNzApi.md#createmultipleemployeeearningstemplate) | **POST** /Employees/{EmployeeId}/paytemplateearnings | creates multiple employee earnings template records
*PayrollNzApi* | [**createPayRun**](docs/Api/PayrollNzApi.md#createpayrun) | **POST** /PayRuns | create a pay run
*PayrollNzApi* | [**createPayRunCalendar**](docs/Api/PayrollNzApi.md#createpayruncalendar) | **POST** /PayRunCalendars | create a new payrun calendar
*PayrollNzApi* | [**createReimbursement**](docs/Api/PayrollNzApi.md#createreimbursement) | **POST** /Reimbursements | create a new reimbursement
*PayrollNzApi* | [**createSuperannuation**](docs/Api/PayrollNzApi.md#createsuperannuation) | **POST** /superannuations | create a new superannuation
*PayrollNzApi* | [**createTimesheet**](docs/Api/PayrollNzApi.md#createtimesheet) | **POST** /Timesheets | create a new timesheet
*PayrollNzApi* | [**createTimesheetLine**](docs/Api/PayrollNzApi.md#createtimesheetline) | **POST** /Timesheets/{TimesheetID}/Lines | create a new timesheet line
*PayrollNzApi* | [**deleteEmployeeEarningsTemplate**](docs/Api/PayrollNzApi.md#deleteemployeeearningstemplate) | **DELETE** /Employees/{EmployeeId}/PayTemplates/earnings/{PayTemplateEarningID} | deletes an employee earnings template record
*PayrollNzApi* | [**deleteEmployeeLeave**](docs/Api/PayrollNzApi.md#deleteemployeeleave) | **DELETE** /Employees/{EmployeeId}/Leave/{LeaveID} | deletes an employee leave record
*PayrollNzApi* | [**deleteEmployeeSalaryAndWage**](docs/Api/PayrollNzApi.md#deleteemployeesalaryandwage) | **DELETE** /Employees/{EmployeeId}/SalaryAndWages/{SalaryAndWagesID} | deletes an employee salary and wages record
*PayrollNzApi* | [**deleteTimesheet**](docs/Api/PayrollNzApi.md#deletetimesheet) | **DELETE** /Timesheets/{TimesheetID} | delete a timesheet
*PayrollNzApi* | [**deleteTimesheetLine**](docs/Api/PayrollNzApi.md#deletetimesheetline) | **DELETE** /Timesheets/{TimesheetID}/Lines/{TimesheetLineID} | delete a timesheet line
*PayrollNzApi* | [**getDeduction**](docs/Api/PayrollNzApi.md#getdeduction) | **GET** /Deductions/{deductionId} | retrieve a single deduction by id
*PayrollNzApi* | [**getDeductions**](docs/Api/PayrollNzApi.md#getdeductions) | **GET** /Deductions | searches deductions
*PayrollNzApi* | [**getEarningsRate**](docs/Api/PayrollNzApi.md#getearningsrate) | **GET** /EarningsRates/{EarningsRateID} | retrieve a single earnings rates by id
*PayrollNzApi* | [**getEarningsRates**](docs/Api/PayrollNzApi.md#getearningsrates) | **GET** /EarningsRates | searches earnings rates
*PayrollNzApi* | [**getEmployee**](docs/Api/PayrollNzApi.md#getemployee) | **GET** /Employees/{EmployeeId} | searches employees
*PayrollNzApi* | [**getEmployeeLeaveBalances**](docs/Api/PayrollNzApi.md#getemployeeleavebalances) | **GET** /Employees/{EmployeeId}/LeaveBalances | search employee leave balances
*PayrollNzApi* | [**getEmployeeLeavePeriods**](docs/Api/PayrollNzApi.md#getemployeeleaveperiods) | **GET** /Employees/{EmployeeId}/LeavePeriods | searches employee leave periods
*PayrollNzApi* | [**getEmployeeLeaveTypes**](docs/Api/PayrollNzApi.md#getemployeeleavetypes) | **GET** /Employees/{EmployeeId}/LeaveTypes | searches employee leave types
*PayrollNzApi* | [**getEmployeeLeaves**](docs/Api/PayrollNzApi.md#getemployeeleaves) | **GET** /Employees/{EmployeeId}/Leave | search employee leave records
*PayrollNzApi* | [**getEmployeeOpeningBalances**](docs/Api/PayrollNzApi.md#getemployeeopeningbalances) | **GET** /Employees/{EmployeeId}/openingBalances | retrieve employee openingbalances
*PayrollNzApi* | [**getEmployeePayTemplates**](docs/Api/PayrollNzApi.md#getemployeepaytemplates) | **GET** /Employees/{EmployeeId}/PayTemplates | searches employee pay templates
*PayrollNzApi* | [**getEmployeePaymentMethod**](docs/Api/PayrollNzApi.md#getemployeepaymentmethod) | **GET** /Employees/{EmployeeId}/PaymentMethods | retrieves an employee&#39;s payment method
*PayrollNzApi* | [**getEmployeeSalaryAndWage**](docs/Api/PayrollNzApi.md#getemployeesalaryandwage) | **GET** /Employees/{EmployeeId}/SalaryAndWages/{SalaryAndWagesID} | get employee salary and wages record by id
*PayrollNzApi* | [**getEmployeeSalaryAndWages**](docs/Api/PayrollNzApi.md#getemployeesalaryandwages) | **GET** /Employees/{EmployeeId}/SalaryAndWages | retrieves an employee&#39;s salary and wages
*PayrollNzApi* | [**getEmployeeTax**](docs/Api/PayrollNzApi.md#getemployeetax) | **GET** /Employees/{EmployeeId}/Tax | searches tax records for an employee
*PayrollNzApi* | [**getEmployees**](docs/Api/PayrollNzApi.md#getemployees) | **GET** /Employees | searches employees
*PayrollNzApi* | [**getLeaveType**](docs/Api/PayrollNzApi.md#getleavetype) | **GET** /LeaveTypes/{LeaveTypeID} | retrieve a single leave type by id
*PayrollNzApi* | [**getLeaveTypes**](docs/Api/PayrollNzApi.md#getleavetypes) | **GET** /LeaveTypes | searches leave types
*PayrollNzApi* | [**getPayRun**](docs/Api/PayrollNzApi.md#getpayrun) | **GET** /PayRuns/{PayRunID} | retrieve a single pay run by id
*PayrollNzApi* | [**getPayRunCalendar**](docs/Api/PayrollNzApi.md#getpayruncalendar) | **GET** /PayRunCalendars/{PayrollCalendarID} | retrieve a single payrun calendar by id
*PayrollNzApi* | [**getPayRunCalendars**](docs/Api/PayrollNzApi.md#getpayruncalendars) | **GET** /PayRunCalendars | searches payrun calendars
*PayrollNzApi* | [**getPayRuns**](docs/Api/PayrollNzApi.md#getpayruns) | **GET** /PayRuns | searches pay runs
*PayrollNzApi* | [**getPaySlip**](docs/Api/PayrollNzApi.md#getpayslip) | **GET** /PaySlips/{PaySlipID} | retrieve a single payslip by id
*PayrollNzApi* | [**getPaySlips**](docs/Api/PayrollNzApi.md#getpayslips) | **GET** /PaySlips | searches payslips
*PayrollNzApi* | [**getReimbursement**](docs/Api/PayrollNzApi.md#getreimbursement) | **GET** /Reimbursements/{ReimbursementID} | retrieve a single reimbursement by id
*PayrollNzApi* | [**getReimbursements**](docs/Api/PayrollNzApi.md#getreimbursements) | **GET** /Reimbursements | searches reimbursements
*PayrollNzApi* | [**getSettings**](docs/Api/PayrollNzApi.md#getsettings) | **GET** /Settings | searches settings
*PayrollNzApi* | [**getStatutoryDeduction**](docs/Api/PayrollNzApi.md#getstatutorydeduction) | **GET** /StatutoryDeductions/{Id} | retrieve a single statutory deduction by id
*PayrollNzApi* | [**getStatutoryDeductions**](docs/Api/PayrollNzApi.md#getstatutorydeductions) | **GET** /StatutoryDeductions | searches statutory deductions
*PayrollNzApi* | [**getSuperannuation**](docs/Api/PayrollNzApi.md#getsuperannuation) | **GET** /superannuations/{SuperannuationID} | searches for a unique superannuation
*PayrollNzApi* | [**getSuperannuations**](docs/Api/PayrollNzApi.md#getsuperannuations) | **GET** /superannuations | searches statutory deductions
*PayrollNzApi* | [**getTimesheet**](docs/Api/PayrollNzApi.md#gettimesheet) | **GET** /Timesheets/{TimesheetID} | retrieve a single timesheet by id
*PayrollNzApi* | [**getTimesheets**](docs/Api/PayrollNzApi.md#gettimesheets) | **GET** /Timesheets | searches timesheets
*PayrollNzApi* | [**getTrackingCategories**](docs/Api/PayrollNzApi.md#gettrackingcategories) | **GET** /settings/trackingCategories | searches tracking categories
*PayrollNzApi* | [**revertTimesheet**](docs/Api/PayrollNzApi.md#reverttimesheet) | **POST** /Timesheets/{TimesheetID}/RevertToDraft | revert a timesheet to draft
*PayrollNzApi* | [**updateEmployee**](docs/Api/PayrollNzApi.md#updateemployee) | **PUT** /Employees/{EmployeeId} | updates employee
*PayrollNzApi* | [**updateEmployeeEarningsTemplate**](docs/Api/PayrollNzApi.md#updateemployeeearningstemplate) | **PUT** /Employees/{EmployeeId}/PayTemplates/earnings/{PayTemplateEarningID} | updates employee earnings template records
*PayrollNzApi* | [**updateEmployeeLeave**](docs/Api/PayrollNzApi.md#updateemployeeleave) | **PUT** /Employees/{EmployeeId}/Leave/{LeaveID} | updates employee leave records
*PayrollNzApi* | [**updateEmployeeSalaryAndWage**](docs/Api/PayrollNzApi.md#updateemployeesalaryandwage) | **PUT** /Employees/{EmployeeId}/SalaryAndWages/{SalaryAndWagesID} | updates employee salary and wages record
*PayrollNzApi* | [**updateEmployeeTax**](docs/Api/PayrollNzApi.md#updateemployeetax) | **POST** /Employees/{EmployeeId}/Tax | updates the tax records for an employee
*PayrollNzApi* | [**updatePayRun**](docs/Api/PayrollNzApi.md#updatepayrun) | **PUT** /PayRuns/{PayRunID} | update a pay run
*PayrollNzApi* | [**updatePaySlipLineItems**](docs/Api/PayrollNzApi.md#updatepaysliplineitems) | **PUT** /PaySlips/{PaySlipID} | creates employee pay slip
*PayrollNzApi* | [**updateTimesheetLine**](docs/Api/PayrollNzApi.md#updatetimesheetline) | **PUT** /Timesheets/{TimesheetID}/Lines/{TimesheetLineID} | update a timesheet line


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [Accounts](docs/Model/Accounts.md)
 - [Address](docs/Model/Address.md)
 - [BankAccount](docs/Model/BankAccount.md)
 - [Benefit](docs/Model/Benefit.md)
 - [CalendarType](docs/Model/CalendarType.md)
 - [Deduction](docs/Model/Deduction.md)
 - [DeductionLine](docs/Model/DeductionLine.md)
 - [DeductionObject](docs/Model/DeductionObject.md)
 - [Deductions](docs/Model/Deductions.md)
 - [EarningsLine](docs/Model/EarningsLine.md)
 - [EarningsOrder](docs/Model/EarningsOrder.md)
 - [EarningsOrderObject](docs/Model/EarningsOrderObject.md)
 - [EarningsOrders](docs/Model/EarningsOrders.md)
 - [EarningsRate](docs/Model/EarningsRate.md)
 - [EarningsRateObject](docs/Model/EarningsRateObject.md)
 - [EarningsRates](docs/Model/EarningsRates.md)
 - [EarningsTemplate](docs/Model/EarningsTemplate.md)
 - [EarningsTemplateObject](docs/Model/EarningsTemplateObject.md)
 - [Employee](docs/Model/Employee.md)
 - [EmployeeEarningsTemplates](docs/Model/EmployeeEarningsTemplates.md)
 - [EmployeeLeave](docs/Model/EmployeeLeave.md)
 - [EmployeeLeaveBalance](docs/Model/EmployeeLeaveBalance.md)
 - [EmployeeLeaveBalances](docs/Model/EmployeeLeaveBalances.md)
 - [EmployeeLeaveObject](docs/Model/EmployeeLeaveObject.md)
 - [EmployeeLeaveSetup](docs/Model/EmployeeLeaveSetup.md)
 - [EmployeeLeaveSetupObject](docs/Model/EmployeeLeaveSetupObject.md)
 - [EmployeeLeaveType](docs/Model/EmployeeLeaveType.md)
 - [EmployeeLeaveTypeObject](docs/Model/EmployeeLeaveTypeObject.md)
 - [EmployeeLeaveTypes](docs/Model/EmployeeLeaveTypes.md)
 - [EmployeeLeaves](docs/Model/EmployeeLeaves.md)
 - [EmployeeObject](docs/Model/EmployeeObject.md)
 - [EmployeeOpeningBalance](docs/Model/EmployeeOpeningBalance.md)
 - [EmployeeOpeningBalancesObject](docs/Model/EmployeeOpeningBalancesObject.md)
 - [EmployeePayTemplate](docs/Model/EmployeePayTemplate.md)
 - [EmployeePayTemplateObject](docs/Model/EmployeePayTemplateObject.md)
 - [EmployeePayTemplates](docs/Model/EmployeePayTemplates.md)
 - [EmployeeStatutoryLeaveBalance](docs/Model/EmployeeStatutoryLeaveBalance.md)
 - [EmployeeStatutoryLeaveBalanceObject](docs/Model/EmployeeStatutoryLeaveBalanceObject.md)
 - [EmployeeStatutoryLeaveSummary](docs/Model/EmployeeStatutoryLeaveSummary.md)
 - [EmployeeStatutoryLeavesSummaries](docs/Model/EmployeeStatutoryLeavesSummaries.md)
 - [EmployeeStatutorySickLeave](docs/Model/EmployeeStatutorySickLeave.md)
 - [EmployeeStatutorySickLeaveObject](docs/Model/EmployeeStatutorySickLeaveObject.md)
 - [EmployeeStatutorySickLeaves](docs/Model/EmployeeStatutorySickLeaves.md)
 - [EmployeeTax](docs/Model/EmployeeTax.md)
 - [EmployeeTaxObject](docs/Model/EmployeeTaxObject.md)
 - [Employees](docs/Model/Employees.md)
 - [Employment](docs/Model/Employment.md)
 - [EmploymentObject](docs/Model/EmploymentObject.md)
 - [GrossEarningsHistory](docs/Model/GrossEarningsHistory.md)
 - [InvalidField](docs/Model/InvalidField.md)
 - [LeaveAccrualLine](docs/Model/LeaveAccrualLine.md)
 - [LeaveEarningsLine](docs/Model/LeaveEarningsLine.md)
 - [LeavePeriod](docs/Model/LeavePeriod.md)
 - [LeavePeriods](docs/Model/LeavePeriods.md)
 - [LeaveType](docs/Model/LeaveType.md)
 - [LeaveTypeObject](docs/Model/LeaveTypeObject.md)
 - [LeaveTypes](docs/Model/LeaveTypes.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PayRun](docs/Model/PayRun.md)
 - [PayRunCalendar](docs/Model/PayRunCalendar.md)
 - [PayRunCalendarObject](docs/Model/PayRunCalendarObject.md)
 - [PayRunCalendars](docs/Model/PayRunCalendars.md)
 - [PayRunObject](docs/Model/PayRunObject.md)
 - [PayRuns](docs/Model/PayRuns.md)
 - [PaySlip](docs/Model/PaySlip.md)
 - [PaySlipObject](docs/Model/PaySlipObject.md)
 - [PaySlips](docs/Model/PaySlips.md)
 - [PaymentLine](docs/Model/PaymentLine.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [PaymentMethodObject](docs/Model/PaymentMethodObject.md)
 - [Problem](docs/Model/Problem.md)
 - [Reimbursement](docs/Model/Reimbursement.md)
 - [ReimbursementLine](docs/Model/ReimbursementLine.md)
 - [ReimbursementObject](docs/Model/ReimbursementObject.md)
 - [Reimbursements](docs/Model/Reimbursements.md)
 - [SalaryAndWage](docs/Model/SalaryAndWage.md)
 - [SalaryAndWageObject](docs/Model/SalaryAndWageObject.md)
 - [SalaryAndWages](docs/Model/SalaryAndWages.md)
 - [Settings](docs/Model/Settings.md)
 - [StatutoryDeduction](docs/Model/StatutoryDeduction.md)
 - [StatutoryDeductionCategory](docs/Model/StatutoryDeductionCategory.md)
 - [StatutoryDeductionLine](docs/Model/StatutoryDeductionLine.md)
 - [StatutoryDeductionObject](docs/Model/StatutoryDeductionObject.md)
 - [StatutoryDeductions](docs/Model/StatutoryDeductions.md)
 - [SuperannuationLine](docs/Model/SuperannuationLine.md)
 - [SuperannuationObject](docs/Model/SuperannuationObject.md)
 - [Superannuations](docs/Model/Superannuations.md)
 - [TaxCode](docs/Model/TaxCode.md)
 - [TaxLine](docs/Model/TaxLine.md)
 - [TaxSettings](docs/Model/TaxSettings.md)
 - [Timesheet](docs/Model/Timesheet.md)
 - [TimesheetEarningsLine](docs/Model/TimesheetEarningsLine.md)
 - [TimesheetLine](docs/Model/TimesheetLine.md)
 - [TimesheetLineObject](docs/Model/TimesheetLineObject.md)
 - [TimesheetObject](docs/Model/TimesheetObject.md)
 - [Timesheets](docs/Model/Timesheets.md)
 - [TrackingCategories](docs/Model/TrackingCategories.md)
 - [TrackingCategory](docs/Model/TrackingCategory.md)


## Documentation For Authorization


## OAuth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://login.xero.com/identity/connect/authorize
- **Scopes**: 
 - **payroll.employees**: Grant read-write access to payroll employees
 - **payroll.employees.read**: Grant read-only access to payroll employees
 - **payroll.payruns**: Grant read-write access to payroll payruns
 - **payroll.payruns.read**: Grant read-only access to payroll payruns
 - **payroll.payslip**: Grant read-write access to payroll payslips
 - **payroll.payslip.read**: Grant read-only access to payroll payslips
 - **payroll.settings**: Grant read-write access to payroll settings
 - **payroll.settings.read**: Grant read-only access to payroll settings
 - **payroll.timesheets**: Grant read-write access to payroll timesheets
 - **payroll.timesheets.read**: Grant read-only access to payroll timesheets


## Author

api@xero.com

