<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 25.10.2019
 * Time: 17:09
 */

namespace App\Services\BackendConnectionClient;

use Illuminate\Support\Facades\Log;

abstract class BackendServiceEnum
{
    // DEFINITION OF BACKEND SERVICES
    /**
     * Get status of bm and cloud server
     */
    const WS_GET_PERSONAL_CLOUD_INSTANCE_STATUS = "wsGetPersonalCloudInstanceStatus";
    /**
     * Get list of matching zones
     */
    const WS_SEARCH_AUTO_D_N_S_ZONES = "WS_SEARCHAutoDNSZones";
    /**
     * Get domain info of given domain
     */
    const WS_GET_AUTO_D_N_S_DOMAIN_INFO = "wsGetAutoDNSDomainInfo";
    /**
     * Update account
     */
    const WS_PUT_ACCOUNT = "wsPutAccount";
    /**
     * Get account status
     */
    const WS_GET_ACCOUNT_STATUS = "wsGetAccountStatus";
    /**
     * Create guest account
     */
    const WS_CREATE_GUEST_ACCOUNT = "wsCreateGuestAccount";
    /**
     * Save account customer
     */
    const WS_SAVE_ACCOUNT_CUSTOMER = "wsSaveAccountCustomer";
    /**
     * Save account customer
     */
    const WS_TRIGGERCUSTOMER_ACTION = "wsTriggerCustomerAction";
    /**
     * Get account customers
     */
    const WS_GET_ACCOUNT_CUSTOMERS = "WS_GET_ACCOUNT_CUSTOMERs";
    /**
     * Create account customer
     */
    const WS_CREATE_ACCOUNT_CUSTOMER = "wsCreateAccountCustomer";
    /**
     * Get account customer
     */
    const WS_GET_ACCOUNT_CUSTOMER = "wsGetAccountCustomer";
    /**
     * Create order
     */
    const WS_SET_ORDER = "wsSetOrder";
    /**
     * Get ResellerCloud packages
     */
    const WS_GET_PACKAGES = "wsGetPackages";
    /**
     * Get ResellerCloud package statistics
     */
    const WS_GET_PACKAGE_STATISTICS = "wsGetPackageStatistics";
    /**
     * Get ResellerCloud instances statistics
     */
    const WS_GET_PACKAGE_INSTANCES = "wsGetPackageInstances";
    /**
     * Create ResellerCloud
     */
    const WS_CREATE_RESELLER_CLOUD = "wsCreateResellerCloud";
    /**
     * Get ResellerCloud types
     */
    const WS_GET_RESELLER_CLOUD_INSTANCE_TYPES = "wsGetResellerCloudInstanceTypes";
    /**
     * Get ResellerCloud types
     */
    const WS_GET_PACKAGE_INSTANCE_TYPES = "wsGetPackageInstanceTypes";
    /**
     * Create ResellerCloud instance
     */
    const WS_CREATE_RESELLER_INSTANCE = "wsCreateResellerInstance";
    /**
     * Resize ResellerCloud instance
     */
    const WS_RESIZE_INSTANCE = "wsResizeInstance";
    /**
     * Alter ResellerCloud instance
     */
    const WS_ALTER_INSTANCE_DATA = "wsAlterInstanceData";
    /**
     * Get Instance credentials
     */
    const WS_GET_INSTANCE_CREDENTIALS = "wsGetInstanceCredentials";
    /**
     * Get Instance status
     */
    const WS_GET_INSTANCE_STATUS = "wsGetInstanceStatus";
    /**
     * Get all Instance status
     */
    const WS_GET_INSTANCE_STATUSES = "wsGetInstanceStatuses";
    /**
     * Get Instance snapshots
     */
    const WS_GET_SNAPSHOTS = "wsGetSnapshots";
    /**
     * Create Instance snapshots
     */
    const WS_CREATE_SNAPSHOT = "wsCreateSnapshot";
    /**
     * Delete Instance snapshots
     */
    const WS_DELETE_SNAPSHOT = "wsDeleteSnapshot";
    /**
     * Rollback Instance snapshots
     */
    const WS_ROLLBACK_SNAPSHOT = "wsRollbackSnapshot";
    /**
     * Trigger Instance action
     */
    const WS_TRIGGER_INSTANCE_ACTION = "wsTriggerInstanceAction";
    /**
     * Login account user on backend
     */
    const WS_LOGIN_ACCOUNT_USER = "wsLoginAccountUser";
    /**
     * Get internal order status
     */
    const WS_GET_ORDER_STATUS = "wsGetOrderStatus";
    /**
     * Get paymentplan for orders
     */
    const WS_GET_PAYMENT_PLAN = "wsGetPaymentPlan";
    /**
     * Get paymentplan for upgrades
     *
     * @param ApiUpgradePaymentPlanBean
     */
    const WS_GET_UPGRADE_PAYMENT_PLAN = "wsGetUpgradePaymentPlan";
    /**
     * Set customer number
     *
     * @param InternalCustomerAction
     */
    const WS_SET_CUSTOMER_NUMBER = "wsSetCustomerNumber";
    /**
     * Set customer number
     */
    const WS_GET_ORDERS = "wsGetOrders";
    /**
     * Get external payment status
     */
    const WS_RECEIVE_EXTERNAL_PAYMENT_STATUS = "wsReceiveExternalPaymentStatus";
    /**
     * Get websocket information
     */
    const WS_GET_WEBSOCKET_TOKEN = "wsGetWebsocketToken";
    /**
     * Validate remote access token
     */
    const WS_VALIDATE_REMOTE_ACCESS_TOKEN = "wsValidateRemoteAccessToken";
    /**
     * Get location by ip
     */
    const WS_GET_LOCATION_BY_I_P = "wsGetLocationByIP";
    /**
     * Delete websocket token
     */
    const WS_DELETE_WEBSOCKET_TOKEN = "wsDeleteWebsocketToken";
    /**
     * Get old packagetype
     */
    const WS_GET_PACKAGE_TYPE_OLD = "WS_GET_PACKAGE_TYPEOld";
    /**
     * Get package type
     */
    const WS_GET_PACKAGE_TYPE = "wsGetPackageType";
    /**
     * Alter package data
     */
    const WS_ALTER_PACKAGE_DATA = "wsAlterPackageData";
    /**
     * Get package ip's
     */
    const WS_GET_PACKAGE_I_P_LIST = "wsGetPackageIPList";
    /**
     * Get Baremetal types
     */
    const WS_GET_BAREMETAL_TYPE = "wsGetBaremetalType";
    /**
     * Get Baremetal servers
     */
    const WS_GET_BAREMETAL_SERVER = "wsGetBaremetalServer";
    /**
     * Get Baremetal servers
     */
    const WS_GET_BAREMETAL_SERVER_CREDENTIALS = "wsGetBaremetalServerCredentials";
    /**
     * Trigger Baremetal server action
     */
    const WS_TRIGGER_B_M_ACTION = "wsTriggerBMAction";
    /**
     * Alter Baremetal data
     */
    const WS_ALTER_BAREMETAL_DATA = "wsAlterBaremetalData";
    /**
     * Get Licenses
     */
    const WS_GET_LICENSES = "wsGetLicenses";
    /**
     * Cancel License
     */
    const WS_TERMINATE_LICENSE_KEY = "wsTerminateLicenseKey";
    /**
     * Check promo code
     */
    const WS_CHECK_PROMOTION_CODE = "wsCheckPromotionCode";
    /**
     * Create websocket token
     */
    const WS_CREATE_WEBSOCKET_TOKEN = "wsCreateWebsocketToken";
    /**
     * Save apns token
     */
    const WS_SAVE_APNS_TOKEN = "wsSaveApnsToken";
    /**
     * Delete apns token
     */
    const WS_DELETE_APNS_TOKEN = "wsDeleteApnsToken";
    /**
     * Get gcm token
     */
    const WS_GET_GCM_TOKEN = "wsGetGcmToken";
    /**
     * Save gcm token
     */
    const WS_SAVE_GCM_TOKEN = "wsSaveGcmToken";
    /**
     * Get Search result for customers, RC instances, PC instances and IP
     */
    const WS_SEARCH = "wsSearch";
    /**
     * Get CI data
     */
    const WS_GET_C_I = "wsGetCI";
    /**
     * Set ptr record
     */
    const WS_SET_P_T_R_RECORD = "wsSetPTRRecord";
    /**
     * Get apns token
     */
    const WS_GET_APNS_TOKEN = "wsGetApnsToken";
    /**
     * Set ci
     */
    const WS_SET_C_I = "wsSetCI";
    /**
     * Verify TOTP token
     */
    const WS_VERIFY_T_O_T_P_TOKEN = "wsVerifyTOTPToken";
    /**
     * Create remote access token
     */
    const WS_CREATE_REMOTE_ACCESS_TOKEN = "wsCreateRemoteAccessToken";
    /**
     * Get file resource
     */
    const WS_GET_FILE_RESOURCE = "wsGetFileResource";
    /**
     * Get all ip's for given account_handle
     */
    const WS_GET_ALL_I_PS = "wsGetAllIPs";
    /**
     * Get Timeline
     */
    const WS_TIMELINE = "wsTimeline";
    /**
     * Get account handle from ip
     */
    const WS_GET_ACCOUNT_HANDLE_FROM_I_P = "wsGetAccountHandleFromIP";
    /**
     * Get traffic statistics via ip
     */
    const WS_GET_TRAFFIC_STATISTICS_I_PPER_DAY = "wsGetTrafficStatisticsIPperDay";
    /**
     * Get traffic statistics via ip
     */
    const WS_GET_BACKUP_USAGE = "wsGetBackupUsage";
    /**
     * Get traffic reporting status
     */
    const WS_GET_TRAFFIC_REPORTING_STATUS = "wsGetTrafficReportingStatus";
    /**
     * Set traffic reporting config
     */
    const WS_SET_TRAFFIC_REPORTING = "wsSetTrafficReporting";
    /**
     * Get project servers
     */
    const WS_GET_INDIVIDUAL_SERVERS = "wsGetIndividualServers";
    /**
     * Get project servers details
     */
    const WS_GET_INDIVIDUAL_SERVER_DETAILS = "wsGetIndividualServerDetails";
    /**
     * Get project servers details
     */
    const WS_GET_INDIVIDUAL_SERVER_CREDENTIALS = "wsGetIndividualServerCredentials";
    /**
     * Get project servers uplinks
     */
    const WS_GET_UPLINKS = "wsGetUplinks";
    /**
     * Get project servers uplink traffic
     */
    const WS_GET_UPLINK_TRAFFIC = "wsGetUplinkTraffic";
    /**
     * Get project servers get racks
     */
    const WS_GET_RACKS = "wsGetRacks";
    /**
     * Get project servers get racks power statistics
     */
    const WS_GET_RACK_POWER_STATISTIC = "wsGetRackPowerStatistic";
    /**
     * Get old personal cloud types... (DEPRECATED)
     */
    const WS_GET_PERSONAL_CLOUD_TYPES = "wsGetPersonalCloudTypes";
    /**
     * Calculate personal cloud price
     */
    const WS_CALCULATE_PERSONAL_CLOUD_PRICE = "wsCalculatePersonalCloudPrice";
    /**
     * Get cloud server instance types
     */
    const WS_CALCULATE_PRICE = "wsCalculatePrice";
    /**
     * Get cloud server instance types
     *
     * @param SimpleAccountHandleBean
     */
    const WS_GET_PERSONAL_CLOUD_INSTANCE_TYPES = "wsGetPersonalCloudInstanceTypes";
    /**
     * Get cloud server instances
     */
    const WS_GET_PERSONAL_CLOUD_INSTANCES = "wsGetPersonalCloudInstances";
    /**
     * Start cloud server instances
     */
    const WS_START_PERSONAL_CLOUD_INSTANCE = "wsStartPersonalCloudInstance";
    /**
     * Stop cloud server instances
     */
    const WS_STOP_PERSONAL_CLOUD_INSTANCE = "wsStopPersonalCloudInstance";
    /**
     * Shutdown cloud server instances
     */
    const WS_SHUTDOWN_PERSONAL_CLOUD_INSTANCE = "wsShutdownPersonalCloudInstance";
    /**
     * Reboot cloud server instances
     */
    const WS_REBOOT_PERSONAL_CLOUD_INSTANCE = "wsRebootPersonalCloudInstance";
    /**
     * Recreate cloud server instances
     */
    const WS_TRIGGER_INSTANCE_RECREATE = "wsTriggerInstanceRecreate";
    /**
     * Get cloud server instance password
     */
    const WS_GET_PERSONAL_CLOUD_INSTANCE_PASSWORDS = "wsGetPersonalCloudInstancePasswords";
    /**
     * Get AutoDNS zones
     */
    const WS_GET_AUTO_DNS_ZONES = "wsGetAutoDNSZones";
    /**
     * Set AutoDNS credentials
     */
    const WS_SET_AUTO_DNS_CREDENTIALS = "wsSetAutoDNSCredentials";
    /**
     * Get AutoDNS zones
     */
    const WS_GET_AUTO_DNS_ZONE = "wsGetAutoDNSZone";
    /**
     * Update AutoDNS zones
     */
    const WS_UPDATE_AUTO_DNS_ZONE = "wsUpdateAutoDNSZone";
    /**
     * Update AutoDNS zones
     */
    const WS_GET_AUTO_DNS_CREDENTIALS = "wsGetAutoDNSCredentials";
    /**
     * Get rc port forwarding
     */
    const WS_GET_RC_PORT_FORWARDING = "wsGetRCPortForwarding";
    /**
     * Add rc port forwarding
     */
    const WS_ADD_RC_PORT_FORWARDING = "wsAddRCPortForwarding";
    /**
     * Update rc port forwarding
     */
    const WS_UPDATE_RC_PORT_FORWARDING = "wsUpdateRCPortForwarding";
    /**
     * Delete rc port forwarding
     */
    const WS_DELETE_RC_PORT_FORWARDING = "wsDeleteRCPortForwarding";
    /**
     * Get smart os firewall rules
     */
    const WS_GET_SMART_OS_FIREWALL_RULES = "wsGetSmartOSFirewallRules";
    /**
     * Add/Update smart os firewall rule
     */
    const WS_ADD_SMART_OS_FIREWALL_RULE = "wsAddSmartOSFirewallRule";
    /**
     * Delete smart os firewall rule
     */
    const WS_DELETE_SMART_OS_FIREWALL_RULE = "wsDeleteSmartOSFirewallRule";
    /**
     * Update smart os firewall status
     */
    const WS_SET_SMART_OS_INSTANCE_FIREWALL_STATUS = "wsSetSmartOSInstanceFirewallStatus";
    /**
     * Get smart os firewall status
     */
    const WS_GET_SMART_OS_INSTANCE_FIREWALL_STATUS = "wsGetSmartOSInstanceFirewallStatus";
    /**
     * Create smart os routing
     */
    const WS_CREATE_SMART_OS_ROUTING = "wsCreateSmartOSRouting";
    /**
     * Delete smart os routing
     */
    const WS_DELETE_SMART_OS_ROUTING = "wsDeleteSmartOSRouting";
    /**
     * Get smart os routing
     */
    const WS_GET_SMART_OS_ROUTING = "wsGetSmartOSRouting";
    /**
     * Save ssl manager credentials
     */
    const WS_SAVE_SSL_MANAGER_CREDENTIALS = "wsSaveSSLManagerCredentials";
    /**
     * Get ssl proxy entries
     */
    const WS_GET_SSL_PROXY_ENTRIES = "wsGetSSLProxyEntries";
    /**
     * Create ssl proxy entry
     */
    const WS_CREATE_SSL_PROXY = "wsCreateSSLProxy";
    /**
     * Renew ssl proxy entry
     */
    const WS_RENEW_SSL_PROXY = "wsRenewSSLProxy";
    /**
     * Get ssl proxy entry
     */
    const WS_GET_SSL_PROXY_ENTRY = "wsGetSSLProxyEntry";
    /**
     * Delete ssl proxy entry
     */
    const WS_DELETE_SSL_PROXY = "wsDeleteSSLProxy";
    /**
     * Update ssl proxy entry
     */
    const WS_UPDATE_SSL_PROXY = "wsUpdateSSLProxy";
    /**
     * Get ssl certificate types
     */
    const WS_GET_SSL_CERTIFICATE_TYPES = "wsGetSSLCertificateTypes";
    /**
     * Get ssl certificate
     */
    const WS_GET_SSL_CERTIFICATE = "wsGetSSLCertificate";
    /**
     * Get ssl manager credentials
     */
    const WS_GET_SSL_MANAGER_CREDENTIALS = "wsGetSSLManagerCredentials";
    /**
     * Get ssl certificates
     */
    const WS_GET_SSL_CERTIFICATES = "wsGetSSLCertificates";
    /**
     * Triggers upgrade of cloud server vm with given parameters
     */
    const WS_ORDER_INSTANCE_RESIZE = "wsOrderInstanceResize";
    /**
     * Creates a new account for ix or stech internal on internal path
     */
    const WS_MERGE_BRAND_ACCOUNT = "wsMergeBrandAccount";
    /**
     * Get brand config ix or stech
     */
    const WS_GET_BRAND_CONFIGURATION = "wsGetBrandConfiguration";
    /**
     * Get live PageMetriX results
     */
    const WS_GET_SSL_MONITORING_QUICK_CHECK = "wsGetSSLMonitoringQuickCheck";
    /**
     * Register PageMetriX reports
     */
    const WS_CREATE_SSL_MONITORING_FROM_INTERNAL = "wsCreateSSLMonitoringFromInternal";
    /**
     * Get SSLProxy modules
     */
    const WS_GET_SSL_PROXY_MODULES = "wsGetSSLProxyModules";
    /**
     * Get SSLProxy modules
     */
    const WS_GET_SSL_PROXY_LOCATIONS = "wsGetSSLProxyLocations";
    /**
     * Purge cache of given SSLProxy id
     */
    const WS_PURGE_SSL_PROXY_CACHE = "wsPurgeSSLProxyCache";
    /**
     * Get iso types
     */
    const WS_GET_ISO_TYPES = "wsGetIsoTypes";
    /**
     * Save DDoS information
     */
    const WS_SAVE_DDOS_INFORMATION = "wsSaveDdosInformation";
    /**
     * Getting DDoS information
     */
    const WS_GET_DDOS_INFORMATION = "wsGetDdosInformation";
    /**
     * Getting DDoS information
     */
    const WS_GET_DDOS_DETAILS = "wsGetDdosDetails";
    /**
     * Mounting ISO Image
     */
    const WS_TRIGGER_ISO_MOUNT = "wsTriggerIsoMount";
    /**
     * Mounting ISO Image
     */
    const WS_TRIGGER_ISO_UNMOUNT = "wsTriggerIsoUnmount";
    /**
     * Calculating PROCEED Price
     */
    const WS_CALCULATE_SSL_PROXY_PRICE = "wsCalculateSSLProxyPrice";
    /**
     * Getting the PROCEED Templates
     */
    const WS_GET_SSL_PROXY_TEMPLATES = "wsGetSSLProxyTemplates";
    /**
     * Delete a the PROCEED Template
     */
    const WS_DELETE_SSL_PROXYTEMPLATE = "WS_DELETE_SSL_PROXYTemplate";
    /**
     * Create new PROCEED Template
     */
    const WS_CREATE_SSL_PROXY_TEMPLATE = "wsCreateSSLProxyTemplate";
    /**
     * Get Domainhandles
     */
    const WS_GET_DOMAINHANDLES = "wsGetDomainhandles";
    /**
     * Get Domains
     */
    const WS_GET_DOMAINS = "wsGetDomains";
    /**
     * Registering Domains
     */
    const WS_REGISTER_DOMAINS = "wsRegisterDomains";
    /**
     * Getting domain price
     */
    const WS_CALCULATE_DOMAIN_PRICE = "wsCalculateDomainPrice";
    /**
     * Check domain availabilities
     */
    const WS_CHECK_DOMAIN_AVAILABILITIES = "wsCheckDomainAvailabilities";
    /**
     * Getting available DomainTlDs
     */
    const WS_GET_AVAILABLE_DOMAIN_TLDS = "wsGetAvailableDomainTlds";
    /**
     * Checking the available terms with the tlds
     */
    const WS_CHECK_DOMAIN_TERM_AVAILABILITIES = "wsCheckDomainTermAvailabilities";
    /**
     * Getting the available FAQs
     */
    const WS_GET_F_A_Q = "wsGetFAQ";
    /**
     * Creates a proceed bulk job
     */
    const WS_ORDER_CERTIFICATE_BULK = "wsOrderCertificateBulk";
    /**
     * Getting all ips
     */
    const WS_GET_ALL_ACCOUNT_IPS = "wsGetAllAccountIPs";
    /**
     * Getting all servers by customer number
     */
    const WS_GET_SERVERS_BY_CUSTOMER_NUMBER = "wsGetServersByCustomerNumber";

    /**
     * Check if Service Exists
     *
     * @param $wsType
     */
    public function serviceExists($wsType)
    {
        try {
            $constant = "BackendServiceEnum::$wsType";
            return defined($constant) ? true : false;
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }
    }
}
