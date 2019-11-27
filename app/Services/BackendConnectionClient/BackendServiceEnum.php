<?php

namespace App\Services\BackendConnectionClient;

/**
 * Get status of bm and cloud server
 */
define("WS_GET_PERSONAL_CLOUD_INSTANCE_STATUS", "wsGetPersonalCloudInstanceStatus");
/**
 * Get list of matching zones
 */
define("WS_SEARCH_AUTO_DNS_ZONES", "wsSearchAutoDNSZones");
/**
 * Get domain info of given domain
 */
define("WS_GET_AUTO_DNS_DOMAIN_INFO", "wsGetAutoDNSDomainInfo");
/**
 * Update account
 */
define("WS_PUT_ACCOUNT", "wsPutAccount");
/**
 * Get account status
 */
define("WS_GET_ACCOUNT_STATUS", "wsGetAccountStatus");
/**
 * Create guest account
 */
define("WS_CREATE_GUEST_ACCOUNT", "wsCreateGuestAccount");
/**
 * Save account customer
 */
define("WS_SAVE_ACCOUNT_CUSTOMER", "wsSaveAccountCustomer");
/**
 * Save account customer
 */
define("WS_TRIGGERCUSTOMER_ACTION", "wsTriggerCustomerAction");
/**
 * Get account customers
 */
define("WS_GET_ACCOUNT_CUSTOMERS", "WS_GET_ACCOUNT_CUSTOMERs");
/**
 * Create account customer
 */
define("WS_CREATE_ACCOUNT_CUSTOMER", "wsCreateAccountCustomer");
/**
 * Get account customer
 */
define("WS_GET_ACCOUNT_CUSTOMER", "wsGetAccountCustomer");
/**
 * Create order
 */
define("WS_SET_ORDER", "wsSetOrder");
/**
 * Get ResellerCloud packages
 */
define("WS_GET_PACKAGES", "wsGetPackages");
/**
 * Get ResellerCloud package statistics
 */
define("WS_GET_PACKAGE_STATISTICS", "wsGetPackageStatistics");
/**
 * Get ResellerCloud instances statistics
 */
define("WS_GET_PACKAGE_INSTANCES", "wsGetPackageInstances");
/**
 * Create ResellerCloud
 */
define("WS_CREATE_RESELLER_CLOUD", "wsCreateResellerCloud");
/**
 * Get ResellerCloud types
 */
define("WS_GET_RESELLER_CLOUD_INSTANCE_TYPES", "wsGetResellerCloudInstanceTypes");
/**
 * Get ResellerCloud types
 */
define("WS_GET_PACKAGE_INSTANCE_TYPES", "wsGetPackageInstanceTypes");
/**
 * Create ResellerCloud instance
 */
define("WS_CREATE_RESELLER_INSTANCE", "wsCreateResellerInstance");
/**
 * Resize ResellerCloud instance
 */
define("WS_RESIZE_INSTANCE", "wsResizeInstance");
/**
 * Alter ResellerCloud instance
 */
define("WS_ALTER_INSTANCE_DATA", "wsAlterInstanceData");
/**
 * Get Instance credentials
 */
define("WS_GET_INSTANCE_CREDENTIALS", "wsGetInstanceCredentials");
/**
 * Get Instance status
 */
define("WS_GET_INSTANCE_STATUS", "wsGetInstanceStatus");
/**
 * Get all Instance status
 */
define("WS_GET_INSTANCE_STATUSES", "wsGetInstanceStatuses");
/**
 * Get Instance snapshots
 */
define("WS_GET_SNAPSHOTS", "wsGetSnapshots");
/**
 * Create Instance snapshots
 */
define("WS_CREATE_SNAPSHOT", "wsCreateSnapshot");
/**
 * Delete Instance snapshots
 */
define("WS_DELETE_SNAPSHOT", "wsDeleteSnapshot");
/**
 * Rollback Instance snapshots
 */
define("WS_ROLLBACK_SNAPSHOT", "wsRollbackSnapshot");
/**
 * Trigger Instance action
 */
define("WS_TRIGGER_INSTANCE_ACTION", "wsTriggerInstanceAction");
/**
 * Login account user on backend
 */
define("WS_LOGIN_ACCOUNT_USER", "wsLoginAccountUser");
/**
 * Get internal order status
 */
define("WS_GET_ORDER_STATUS", "wsGetOrderStatus");
/**
 * Get paymentplan for orders
 */
define("WS_GET_PAYMENT_PLAN", "wsGetPaymentPlan");
/**
 * Get paymentplan for upgrades
 *
 * @param ApiUpgradePaymentPlanBean
 */
define("WS_GET_UPGRADE_PAYMENT_PLAN", "wsGetUpgradePaymentPlan");
/**
 * Set customer number
 *
 * @param InternalCustomerAction
 */
define("WS_SET_CUSTOMER_NUMBER", "wsSetCustomerNumber");
/**
 * Set customer number
 */
define("WS_GET_ORDERS", "wsGetOrders");
/**
 * Get external payment status
 */
define("WS_RECEIVE_EXTERNAL_PAYMENT_STATUS", "wsReceiveExternalPaymentStatus");
/**
 * Get websocket information
 */
define("WS_GET_WEBSOCKET_TOKEN", "wsGetWebsocketToken");
/**
 * Validate remote access token
 */
define("WS_VALIDATE_REMOTE_ACCESS_TOKEN", "wsValidateRemoteAccessToken");
/**
 * Get location by ip
 */
define("WS_GET_LOCATION_BY_I_P", "wsGetLocationByIP");
/**
 * Delete websocket token
 */
define("WS_DELETE_WEBSOCKET_TOKEN", "wsDeleteWebsocketToken");
/**
 * Get old packagetype
 */
define("WS_GET_PACKAGE_TYPE_OLD", "WS_GET_PACKAGE_TYPEOld");
/**
 * Get package type
 */
define("WS_GET_PACKAGE_TYPE", "wsGetPackageType");
/**
 * Alter package data
 */
define("WS_ALTER_PACKAGE_DATA", "wsAlterPackageData");
/**
 * Get package ip's
 */
define("WS_GET_PACKAGE_I_P_LIST", "wsGetPackageIPList");
/**
 * Get Baremetal types
 */
define("WS_GET_BAREMETAL_TYPE", "wsGetBaremetalType");
/**
 * Get Baremetal servers
 */
define("WS_GET_BAREMETAL_SERVER", "wsGetBaremetalServer");
/**
 * Get Baremetal servers
 */
define("WS_GET_BAREMETAL_SERVER_CREDENTIALS", "wsGetBaremetalServerCredentials");
/**
 * Trigger Baremetal server action
 */
define("WS_TRIGGER_BM_ACTION", "wsTriggerBMAction");
/**
 * Alter Baremetal data
 */
define("WS_ALTER_BAREMETAL_DATA", "wsAlterBaremetalData");
/**
 * Get Licenses
 */
define("WS_GET_LICENSES", "wsGetLicenses");
/**
 * Cancel License
 */
define("WS_TERMINATE_LICENSE_KEY", "wsTerminateLicenseKey");
/**
 * Check promo code
 */
define("WS_CHECK_PROMOTION_CODE", "wsCheckPromotionCode");
/**
 * Create websocket token
 */
define("WS_CREATE_WEBSOCKET_TOKEN", "wsCreateWebsocketToken");
/**
 * Save apns token
 */
define("WS_SAVE_APNS_TOKEN", "wsSaveApnsToken");
/**
 * Delete apns token
 */
define("WS_DELETE_APNS_TOKEN", "wsDeleteApnsToken");
/**
 * Get gcm token
 */
define("WS_GET_GCM_TOKEN", "wsGetGcmToken");
/**
 * Save gcm token
 */
define("WS_SAVE_GCM_TOKEN", "wsSaveGcmToken");
/**
 * Get Search result for customers, RC instances, PC instances and IP
 */
define("WS_SEARCH", "wsSearch");
/**
 * Get CI data
 */
define("WS_GET_C_I", "wsGetCI");
/**
 * Set ptr record
 */
define("WS_SET_PTR_RECORD", "wsSetPTRRecord");
/**
 * Get apns token
 */
define("WS_GET_APNS_TOKEN", "wsGetApnsToken");
/**
 * Set ci
 */
define("WS_SET_CI", "wsSetCI");
/**
 * Verify TOTP token
 */
define("WS_VERIFY_TOTP_TOKEN", "wsVerifyTOTPToken");
/**
 * Create remote access token
 */
define("WS_CREATE_REMOTE_ACCESS_TOKEN", "wsCreateRemoteAccessToken");
/**
 * Get file resource
 */
define("WS_GET_FILE_RESOURCE", "wsGetFileResource");
/**
 * Get all ip's for given account_handle
 */
define("WS_GET_ALL_I_PS", "wsGetAllIPs");
/**
 * Get Timeline
 */
define("WS_TIMELINE", "wsTimeline");
/**
 * Get account handle from ip
 */
define("WS_GET_ACCOUNT_HANDLE_FROM_IP", "wsGetAccountHandleFromIP");
/**
 * Get traffic statistics via ip
 */
define("WS_GET_TRAFFIC_STATISTICS_IP_PER_DAY", "wsGetTrafficStatisticsIPperDay");
/**
 * Get traffic statistics via ip
 */
define("WS_GET_BACKUP_USAGE", "wsGetBackupUsage");
/**
 * Get traffic reporting status
 */
define("WS_GET_TRAFFIC_REPORTING_STATUS", "wsGetTrafficReportingStatus");
/**
 * Set traffic reporting config
 */
define("WS_SET_TRAFFIC_REPORTING", "wsSetTrafficReporting");
/**
 * Get project servers
 */
define("WS_GET_INDIVIDUAL_SERVERS", "wsGetIndividualServers");
/**
 * Get project servers details
 */
define("WS_GET_INDIVIDUAL_SERVER_DETAILS", "wsGetIndividualServerDetails");
/**
 * Get project servers details
 */
define("WS_GET_INDIVIDUAL_SERVER_CREDENTIALS", "wsGetIndividualServerCredentials");
/**
 * Get project servers uplinks
 */
define("WS_GET_UPLINKS", "wsGetUplinks");
/**
 * Get project servers uplink traffic
 */
define("WS_GET_UPLINK_TRAFFIC", "wsGetUplinkTraffic");
/**
 * Get project servers get racks
 */
define("WS_GET_RACKS", "wsGetRacks");
/**
 * Get project servers get racks power statistics
 */
define("WS_GET_RACK_POWER_STATISTIC", "wsGetRackPowerStatistic");
/**
 * Get old personal cloud types... (DEPRECATED)
 */
define("WS_GET_PERSONAL_CLOUD_TYPES", "wsGetPersonalCloudTypes");
/**
 * Calculate personal cloud price
 */
define("WS_CALCULATE_PERSONAL_CLOUD_PRICE", "wsCalculatePersonalCloudPrice");
/**
 * Get cloud server instance types
 */
define("WS_CALCULATE_PRICE", "wsCalculatePrice");
/**
 * Get cloud server instance types
 *
 * @param SimpleAccountHandleBean
 */
define("WS_GET_PERSONAL_CLOUD_INSTANCE_TYPES", "wsGetPersonalCloudInstanceTypes");
/**
 * Get cloud server instances
 */
define("WS_GET_PERSONAL_CLOUD_INSTANCES", "wsGetPersonalCloudInstances");
/**
 * Start cloud server instances
 */
define("WS_START_PERSONAL_CLOUD_INSTANCE", "wsStartPersonalCloudInstance");
/**
 * Stop cloud server instances
 */
define("WS_STOP_PERSONAL_CLOUD_INSTANCE", "wsStopPersonalCloudInstance");
/**
 * Shutdown cloud server instances
 */
define("WS_SHUTDOWN_PERSONAL_CLOUD_INSTANCE", "wsShutdownPersonalCloudInstance");
/**
 * Reboot cloud server instances
 */
define("WS_REBOOT_PERSONAL_CLOUD_INSTANCE", "wsRebootPersonalCloudInstance");
/**
 * Recreate cloud server instances
 */
define("WS_TRIGGER_INSTANCE_RECREATE", "wsTriggerInstanceRecreate");
/**
 * Get cloud server instance password
 */
define("WS_GET_PERSONAL_CLOUD_INSTANCE_PASSWORDS", "wsGetPersonalCloudInstancePasswords");
/**
 * Get AutoDNS zones
 */
define("WS_GET_AUTO_DNS_ZONES", "wsGetAutoDNSZones");
/**
 * Set AutoDNS credentials
 */
define("WS_SET_AUTO_DNS_CREDENTIALS", "wsSetAutoDNSCredentials");
/**
 * Get AutoDNS zones
 */
define("WS_GET_AUTO_DNS_ZONE", "wsGetAutoDNSZone");
/**
 * Update AutoDNS zones
 */
define("WS_UPDATE_AUTO_DNS_ZONE", "wsUpdateAutoDNSZone");
/**
 * Update AutoDNS zones
 */
define("WS_GET_AUTO_DNS_CREDENTIALS", "wsGetAutoDNSCredentials");
/**
 * Get rc port forwarding
 */
define("WS_GET_RC_PORT_FORWARDING", "wsGetRCPortForwarding");
/**
 * Add rc port forwarding
 */
define("WS_ADD_RC_PORT_FORWARDING", "wsAddRCPortForwarding");
/**
 * Update rc port forwarding
 */
define("WS_UPDATE_RC_PORT_FORWARDING", "wsUpdateRCPortForwarding");
/**
 * Delete rc port forwarding
 */
define("WS_DELETE_RC_PORT_FORWARDING", "wsDeleteRCPortForwarding");
/**
 * Get smart os firewall rules
 */
define("WS_GET_SMART_OS_FIREWALL_RULES", "wsGetSmartOSFirewallRules");
/**
 * Add/Update smart os firewall rule
 */
define("WS_ADD_SMART_OS_FIREWALL_RULE", "wsAddSmartOSFirewallRule");
/**
 * Delete smart os firewall rule
 */
define("WS_DELETE_SMART_OS_FIREWALL_RULE", "wsDeleteSmartOSFirewallRule");
/**
 * Update smart os firewall status
 */
define("WS_SET_SMART_OS_INSTANCE_FIREWALL_STATUS", "wsSetSmartOSInstanceFirewallStatus");
/**
 * Get smart os firewall status
 */
define("WS_GET_SMART_OS_INSTANCE_FIREWALL_STATUS", "wsGetSmartOSInstanceFirewallStatus");
/**
 * Create smart os routing
 */
define("WS_CREATE_SMART_OS_ROUTING", "wsCreateSmartOSRouting");
/**
 * Delete smart os routing
 */
define("WS_DELETE_SMART_OS_ROUTING", "wsDeleteSmartOSRouting");
/**
 * Get smart os routing
 */
define("WS_GET_SMART_OS_ROUTING", "wsGetSmartOSRouting");
/**
 * Save ssl manager credentials
 */
define("WS_SAVE_SSL_MANAGER_CREDENTIALS", "wsSaveSSLManagerCredentials");
/**
 * Get ssl proxy entries
 */
define("WS_GET_SSL_PROXY_ENTRIES", "wsGetSSLProxyEntries");
/**
 * Create ssl proxy entry
 */
define("WS_CREATE_SSL_PROXY", "wsCreateSSLProxy");
/**
 * Renew ssl proxy entry
 */
define("WS_RENEW_SSL_PROXY", "wsRenewSSLProxy");
/**
 * Get ssl proxy entry
 */
define("WS_GET_SSL_PROXY_ENTRY", "wsGetSSLProxyEntry");
/**
 * Delete ssl proxy entry
 */
define("WS_DELETE_SSL_PROXY", "wsDeleteSSLProxy");
/**
 * Update ssl proxy entry
 */
define("WS_UPDATE_SSL_PROXY", "wsUpdateSSLProxy");
/**
 * Get ssl certificate types
 */
define("WS_GET_SSL_CERTIFICATE_TYPES", "wsGetSSLCertificateTypes");
/**
 * Get ssl certificate
 */
define("WS_GET_SSL_CERTIFICATE", "wsGetSSLCertificate");
/**
 * Get ssl manager credentials
 */
define("WS_GET_SSL_MANAGER_CREDENTIALS", "wsGetSSLManagerCredentials");
/**
 * Get ssl certificates
 */
define("WS_GET_SSL_CERTIFICATES", "wsGetSSLCertificates");
/**
 * Triggers upgrade of cloud server vm with given parameters
 */
define("WS_ORDER_INSTANCE_RESIZE", "wsOrderInstanceResize");
/**
 * Creates a new account for ix or stech internal on internal path
 */
define("WS_MERGE_BRAND_ACCOUNT", "wsMergeBrandAccount");
/**
 * Get brand config ix or stech
 */
define("WS_GET_BRAND_CONFIGURATION", "wsGetBrandConfiguration");
/**
 * Get live PageMetriX results
 */
define("WS_GET_SSL_MONITORING_QUICK_CHECK", "wsGetSSLMonitoringQuickCheck");
/**
 * Register PageMetriX reports
 */
define("WS_CREATE_SSL_MONITORING_FROM_INTERNAL", "wsCreateSSLMonitoringFromInternal");
/**
 * Get SSLProxy modules
 */
define("WS_GET_SSL_PROXY_MODULES", "wsGetSSLProxyModules");
/**
 * Get SSLProxy modules
 */
define("WS_GET_SSL_PROXY_LOCATIONS", "wsGetSSLProxyLocations");
/**
 * Purge cache of given SSLProxy id
 */
define("WS_PURGE_SSL_PROXY_CACHE", "wsPurgeSSLProxyCache");
/**
 * Get iso types
 */
define("WS_GET_ISO_TYPES", "wsGetIsoTypes");
/**
 * Save DDoS information
 */
define("WS_SAVE_DDOS_INFORMATION", "wsSaveDdosInformation");
/**
 * Getting DDoS information
 */
define("WS_GET_DDOS_INFORMATION", "wsGetDdosInformation");
/**
 * Getting DDoS information
 */
define("WS_GET_DDOS_DETAILS", "wsGetDdosDetails");
/**
 * Mounting ISO Image
 */
define("WS_TRIGGER_ISO_MOUNT", "wsTriggerIsoMount");
/**
 * Mounting ISO Image
 */
define("WS_TRIGGER_ISO_UNMOUNT", "wsTriggerIsoUnmount");
/**
 * Calculating PROCEED Price
 */
define("WS_CALCULATE_SSL_PROXY_PRICE", "wsCalculateSSLProxyPrice");
/**
 * Getting the PROCEED Templates
 */
define("WS_GET_SSL_PROXY_TEMPLATES", "wsGetSSLProxyTemplates");
/**
 * Delete a the PROCEED Template
 */
define("WS_DELETE_SSL_PROXYTEMPLATE", "WS_DELETE_SSL_PROXYTemplate");
/**
 * Create new PROCEED Template
 */
define("WS_CREATE_SSL_PROXY_TEMPLATE", "wsCreateSSLProxyTemplate");
/**
 * Get Domainhandles
 */
define("WS_GET_DOMAINHANDLES", "wsGetDomainhandles");
/**
 * Get Domains
 */
define("WS_GET_DOMAINS", "wsGetDomains");
/**
 * Registering Domains
 */
define("WS_REGISTER_DOMAINS", "wsRegisterDomains");
/**
 * Getting domain price
 */
define("WS_CALCULATE_DOMAIN_PRICE", "wsCalculateDomainPrice");
/**
 * Check domain availabilities
 */
define("WS_CHECK_DOMAIN_AVAILABILITIES", "wsCheckDomainAvailabilities");
/**
 * Getting available DomainTlDs
 */
define("WS_GET_AVAILABLE_DOMAIN_TLDS", "wsGetAvailableDomainTlds");
/**
 * Checking the available terms with the tlds
 */
define("WS_CHECK_DOMAIN_TERM_AVAILABILITIES", "wsCheckDomainTermAvailabilities");
/**
 * Getting the available FAQs
 */
define("WS_GET_FAQ", "wsGetFAQ");
/**
 * Creates a proceed bulk job
 */
define("WS_ORDER_CERTIFICATE_BULK", "wsOrderCertificateBulk");
/**
 * Getting all ips
 */
define("WS_GET_ALL_ACCOUNT_IPS", "wsGetAllAccountIPs");
/**
 * Getting all servers by customer number
 */
define("WS_GET_SERVERS_BY_CUSTOMER_NUMBER", "wsGetServersByCustomerNumber");

abstract class BackendServiceEnum
{
    /**
     * Check if Service Exists
     *
     * @param $wsType
     */
    public function serviceExists($wsType)
    {
        try {
            return defined($wsType) ? true : false;
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }
    }
}
