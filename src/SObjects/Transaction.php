<?php

namespace RevoSystems\SageLiveApi\SObjects;

use RevoSystems\SageLiveApi\ParentSObject;

class Transaction extends ParentSObject
{
    const RESOURCE_NAME = "s2cor__Sage_INV_Trade_Document__c";
    protected $tag      = ["UID" => 'SalesInvoiceNumber', "Object" => "s2cor__Transaction__c"];
    protected $fields   = [
        "s2cor__Account__c"                             => [ "required" => false, "type" => "Lookup(Account)"       ],
        "s2cor__Account_Dimension__c"                   => [ "required" => false, "type" => "Lookup(Dimension)"     ],
        "s2cor__Account_Tag__c"                         => [ "required" => false, "type" => "Lookup(Dimension Tag)" ],
        "s2cor__Account_Type_Filter_1__c"               => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Account_Type_Filter_2__c"               => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Account_Type_Filter_3__c"               => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Account_Type_Filter_4__c"               => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Approval_Status__c"                     => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Cc_Emails__c"                           => [ "required" => false, "type" => "Text Area(255)"        ],
        "s2cor__Classification__c"                      => [ "required" => false, "type" => "Formula (Text)"        ],
        "s2cor__Company__c"                             => [ "required" => false, "type" => "Lookup(Company)"       ],
        "s2cor__Contact__c"                             => [ "required" => false, "type" => "Lookup(Contact)"       ],
        "CreatedById"                                   => [ "required" => false, "type" => "Lookup(User)"          ],
        "s2cor__Currency__c"                            => [ "required" => false, "type" => "Lookup(Currency)"      ],
        "s2cor__Date__c"                                => [ "required" => false, "type" => "Date"                  ],
        "s2cor__Description__c"                         => [ "required" => false, "type" => "Text Area(255)"        ],
        "s2cor__Discount_Amount__c"                     => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Item)"],
        "s2cor__Discount_Percentage__c"                 => [ "required" => false, "type" => "Percent(3, 2)"         ],
        "s2cor__Document_Number_Tag__c"                 => [ "required" => false, "type" => "Lookup(Dimension Tag)" ],
        "s2cor__Due_Date__c"                            => [ "required" => false, "type" => "Formula (Date)"        ],
        "s2cor__Recognition_End_Date__c"                => [ "required" => false, "type" => "Date"                  ],
        "s2cor__Recurrent_End_Date__c"                  => [ "required" => false, "type" => "Date"                  ],
        "s2cor__Exchange_Rate__c"                       => [ "required" => false, "type" => "Number(10, 8)"         ],
        "s2cor__Foreign_Discount_Amount__c"             => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Item)"        ],
        "s2cor__Foreign_Net_Amount__c"                  => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Item)"        ],
        "s2cor__Foreign_Tax_Amount__c"                  => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Tax Breakdown)"],
        "s2cor__Foreign_Total_Amount__c"                => [ "required" => false, "type" => "Formula (Number)"      ],
        "s2cor__Foreign_Total_Items__c"                 => [ "required" => false, "type" => "Formula (Number)"      ],
        "s2cor__Foreign_Total_Recurrent_Amount__c"      => [ "required" => false, "type" => "Number(16, 2)"         ],
        "s2cor__Foreign_Withholding_Amount__c"          => [ "required" => false, "type" => "Number(16, 2)"         ],
        "s2cor__Formatted_Foreign_Total_Amount__c"      => [ "required" => false, "type" => "Formula (Text)"        ],
        "s2cor__Formatted_Total_Amount__c"              => [ "required" => false, "type" => "Formula (Text)"        ],
        "s2cor__Is_Converted__c"                        => [ "required" => false, "type" => "Checkbox"              ],
        "s2cor__Is_Current_Classification__c"           => [ "required" => false, "type" => "Formula (Checkbox)"    ],
        "s2cor__Is_Current_Company__c"                  => [ "required" => false, "type" => "Formula (Checkbox)"    ],
        "s2cor__Is_Email_Sent__c"                       => [ "required" => false, "type" => "Checkbox"              ],
        "s2cor__Is_Paid__c"                             => [ "required" => false, "type" => "Formula (Checkbox)"    ],
        "s2cor__Is_Selected_By_Me__c"                   => [ "required" => false, "type" => "Formula (Checkbox)"    ],
        "s2cor__Items_Total_Amount__c"                  => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Item)"],
        "s2cor__Job__c"                                 => [ "required" => false, "type" => "Lookup(Job)"           ],
        "s2cor__Recognition_Journal_Type__c"            => [ "required" => false, "type" => "Lookup(Journal Type)"  ],
        "LastModifiedById"                              => [ "required" => false, "type" => "Lookup(User)"          ],
        "s2cor__Legal_Note__c"                          => [ "required" => false, "type" => "Text(255)"             ],
        "s2cor__Legislation__c"                         => [ "required" => false, "type" => "Lookup(Legislation)"   ],
        "s2cor__Manual_Due_Date__c"                     => [ "required" => false, "type" => "Date"                  ],
        "s2cor__Net_Amount__c"                          => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Item)"],
        "s2cor__On_Day__c"                              => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Recognition_On_Day__c"                  => [ "required" => false, "type" => "Picklist"              ],
        "s2cor__Operation_Date__c"                      => [ "required" => false, "type" => "Date"                  ],
        "s2cor__Registration_Number__c"                 => [ "required" => false, "type" => "Text(100)"             ],
        "s2cor__Outstanding_Amount__c"                  => [ "required" => false, "type" => "Formula (Number)"      ],
        "OwnerId"                                       => [ "required" => false, "type" => "Lookup(User,Group)"    ],
        "s2cor__Paid_Amount__c"                         => [ "required" => false, "type" => "Formula (Number)"      ],
        "s2cor__Pay_Now_Provider__c"                    => [ "required" => false, "type" => "Text(255)"             ],
        "s2cor__Pay_Now_Url__c"                         => [ "required" => false, "type" => "Long Text Area(10000)" ],
        "s2cor__Payment_Reference__c"                   => [ "required" => false, "type" => "Text(255)"],
        "s2cor__Payment_Terms_Tag__c"                   => [ "required" => false, "type" => "Lookup(Dimension Tag)"],
        "s2cor__Payment_Terms_Dimension__c"             => [ "required" => false, "type" => "Lookup(Dimension)"],
        "s2cor__PDF_Footer__c"                          => [ "required" => false, "type" => "Text Area(255)"],
        "s2cor__PDF_Template_Page__c"                   => [ "required" => false, "type" => "Text(255)"],
        "s2cor__Period_Type__c"                         => [ "required" => false, "type" => "Picklist"],
        "s2cor__Recognition_Period_Type__c"             => [ "required" => false, "type" => "Picklist"],
        "s2cor__Status__c"                              => [ "required" => false, "type" => "Picklist"],
        "s2cor__Posting_Date__c"                        => [ "required" => false, "type" => "Date"],
        "s2cor__Price_Book__c"                          => [ "required" => false, "type" => "Lookup(Price Book)"],
        "s2cor__Is_Recognition__c"                      => [ "required" => false, "type" => "Checkbox"],
        "s2cor__Every_Periods__c"                       => [ "required" => false, "type" => "Number(3, 0)"],
        "s2cor__Recognition_Every_Periods__c"           => [ "required" => false, "type" => "Number(3, 0)"],
        "s2cor__Is_Recurrent__c"                        => [ "required" => false, "type" => "Checkbox"],
        "s2cor__Reference__c"                           => [ "required" => false, "type" => "Text(255)"],
        "s2cor__VAT_Registration_Number__c"             => [ "required" => false, "type" => "Formula (Text)"],
        "Name"                                          => [ "required" => false, "type" => "Number"],
        "s2cor__Source_Trade_Document__c"               => [ "required" => false, "type" => "Lookup(Transaction)"],
        "s2cor__Recognition_Start_Date__c"              => [ "required" => false, "type" => "Date"],
        "s2cor__Recurrent_Start_Date__c"                => [ "required" => false, "type" => "Date"],
        "s2cor__Is_Scheduled__c"                        => [ "required" => false, "type" => "Checkbox"],
        "s2cor__Tax_Amount__c"                          => [ "required" => false, "type" => "Roll-Up Summary (SUM Transaction Tax Breakdown)"],
        "s2cor__VAT_Submission_Type__c"                 => [ "required" => false, "type" => "Text(50)"],
        "s2cor__Tax_Treatment__c"                       => [ "required" => false, "type" => "Lookup(Tax Treatment)"],
        "s2cor__Total_Amount__c"                        => [ "required" => false, "type" => "Formula (Number)"],
        "s2cor__Total_Items__c"                         => [ "required" => false, "type" => "Formula (Number)"],
        "s2cor__Total_Recurrent_Amount__c"              => [ "required" => false, "type" => "Number(16, 2)"],
        "s2cor__Document_Number__c"                     => [ "required" => false, "type" => "Formula (Text)"],
        "s2cor__Trade_Document_Schedule__c"             => [ "required" => false, "type" => "Lookup(Transaction Schedule)"],
        "s2cor__Trade_Document_Type__c"                 => [ "required" => false, "type" => "Lookup(Transaction Type)"],
        "s2cor__UID__c"                                 => [ "required" => false, "type" => "Text(128) (External ID) (Unique Case Sensitive)"],
        "s2cor__WFM_Job__c"                             => [ "required" => false, "type" => "Lookup(Job)"],
        "s2cor__Withholding_Amount__c"                  => [ "required" => false, "type" => "Number(16, 2)"],
        "s2cor__Withholding_Dimension__c"               => [ "required" => false, "type" => "Lookup(Dimension)"],
        "s2cor__Withholding_Rate__c"                    => [ "required" => false, "type" => "Percent(10, 4)"],
        "s2cor__Withholding_Tag__c"                     => [ "required" => false, "type" => "Lookup(Dimension Tag)"],
    ];
}
