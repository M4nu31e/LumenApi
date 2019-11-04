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
    const wsGetPersonalCloudInstanceStatus = "wsGetPersonalCloudInstanceStatus";
    /**
     * Get list of matching zones
     */
    const wsSearchAutoDNSZones = "wsSearchAutoDNSZones";
    /**
     * Get domain info of given domain
     */
    const wsGetAutoDNSDomainInfo = "wsGetAutoDNSDomainInfo";
    /**
     * Update account
     */
    const wsPutAccount = "wsPutAccount";
    /**
     * Get account status
     */
    const wsGetAccountStatus = "wsGetAccountStatus";
    /**
     * Create guest account
     */
    const wsCreateGuestAccount = "wsCreateGuestAccount";
    /**
     * Save account customer
     */
    const wsSaveAccountCustomer = "wsSaveAccountCustomer";
    /**
     * Save account customer
     */
    const wsTriggerCustomerAction = "wsTriggerCustomerAction";
    /**
     * Get account customers
     */
    const wsGetAccountCustomers = "wsGetAccountCustomers";
    /**
     * Create account customer
     */
    const wsCreateAccountCustomer = "wsCreateAccountCustomer";
    /**
     * Get account customer
     */
    const wsGetAccountCustomer = "wsGetAccountCustomer";
    /**
     * Create order
     */
    const wsSetOrder = "wsSetOrder";
    /**
     * Get ResellerCloud packages
     */
    const wsGetPackages = "wsGetPackages";
    /**
     * Get ResellerCloud package statistics
     */
    const wsGetPackageStatistics = "wsGetPackageStatistics";
    /**
     * Get ResellerCloud instances statistics
     */
    const wsGetPackageInstances = "wsGetPackageInstances";
    /**
     * Create ResellerCloud
     */
    const wsCreateResellerCloud = "wsCreateResellerCloud";
    /**
     * Get ResellerCloud types
     */
    const wsGetResellerCloudInstanceTypes = "wsGetResellerCloudInstanceTypes";
    /**
     * Get ResellerCloud types
     */
    const wsGetPackageInstanceTypes = "wsGetPackageInstanceTypes";
    /**
     * Create ResellerCloud instance
     */
    const wsCreateResellerInstance = "wsCreateResellerInstance";
    /**
     * Resize ResellerCloud instance
     */
    const wsResizeInstance = "wsResizeInstance";
    /**
     * Alter ResellerCloud instance
     */
    const wsAlterInstanceData = "wsAlterInstanceData";
    /**
     * Get Instance credentials
     */
    const wsGetInstanceCredentials = "wsGetInstanceCredentials";
    /**
     * Get Instance status
     */
    const wsGetInstanceStatus = "wsGetInstanceStatus";
    /**
     * Get all Instance status
     */
    const wsGetInstanceStatuses = "wsGetInstanceStatuses";
    /**
     * Get Instance snapshots
     */
    const wsGetSnapshots = "wsGetSnapshots";
    /**
     * Create Instance snapshots
     */
    const wsCreateSnapshot = "wsCreateSnapshot";
    /**
     * Delete Instance snapshots
     */
    const wsDeleteSnapshot = "wsDeleteSnapshot";
    /**
     * Rollback Instance snapshots
     */
    const wsRollbackSnapshot = "wsRollbackSnapshot";
    /**
     * Trigger Instance action
     */
    const wsTriggerInstanceAction = "wsTriggerInstanceAction";
    /**
     * Login account user on backend
     */
    const wsLoginAccountUser = "wsLoginAccountUser";
    /**
     * Get internal order status
     */
    const wsGetOrderStatus = "wsGetOrderStatus";
    /**
     * Get paymentplan for orders
     */
    const wsGetPaymentPlan = "wsGetPaymentPlan";
    /**
     * Get paymentplan for upgrades
     *
     * @param ApiUpgradePaymentPlanBean
     */
    const wsGetUpgradePaymentPlan = "wsGetUpgradePaymentPlan";
    /**
     * Set customer number
     *
     * @param InternalCustomerAction
     */
    const wsSetCustomerNumber = "wsSetCustomerNumber";
    /**
     * Set customer number
     */
    const wsGetOrders = "wsGetOrders";
    /**
     * Get external payment status
     */
    const wsReceiveExternalPaymentStatus = "wsReceiveExternalPaymentStatus";
    /**
     * Get websocket information
     */
    const wsGetWebsocketToken = "wsGetWebsocketToken";
    /**
     * Validate remote access token
     */
    const wsValidateRemoteAccessToken = "wsValidateRemoteAccessToken";
    /**
     * Get location by ip
     */
    const wsGetLocationByIP = "wsGetLocationByIP";
    /**
     * Delete websocket token
     */
    const wsDeleteWebsocketToken = "wsDeleteWebsocketToken";
    /**
     * Get old packagetype
     */
    const wsGetPackageTypeOld = "wsGetPackageTypeOld";
    /**
     */
    const wsGetPackageType = "wsGetPackageType";
    /**
     * Alter package data
     */
    const wsAlterPackageData = "wsAlterPackageData";
    /**
     * Get package ip's
     */
    const wsGetPackageIPList = "wsGetPackageIPList";
    /**
     * Get Baremetal types
     */
    const wsGetBaremetalType = "wsGetBaremetalType";
    /**
     * Get Baremetal servers
     */
    const wsGetBaremetalServer = "wsGetBaremetalServer";
    /**
     * Get Baremetal servers
     */
    const wsGetBaremetalServerCredentials = "wsGetBaremetalServerCredentials";
    /**
     * Trigger Baremetal server action
     */
    const wsTriggerBMAction = "wsTriggerBMAction";
    /**
     * Alter Baremetal data
     */
    const wsAlterBaremetalData = "wsAlterBaremetalData";
    /**
     * Get Licenses
     */
    const wsGetLicenses = "wsGetLicenses";
    /**
     * Cancel License
     */
    const wsTerminateLicenseKey = "wsTerminateLicenseKey";
    /**
     * Check promo code
     */
    const wsCheckPromotionCode = "wsCheckPromotionCode";
    /**
     * Create websocket token
     */
    const wsCreateWebsocketToken = "wsCreateWebsocketToken";
    /**
     * Save apns token
     */
    const wsSaveApnsToken = "wsSaveApnsToken";
    /**
     * Delete apns token
     */
    const wsDeleteApnsToken = "wsDeleteApnsToken";
    /**
     * Get gcm token
     */
    const wsGetGcmToken = "wsGetGcmToken";
    /**
     * Save gcm token
     */
    const wsSaveGcmToken = "wsSaveGcmToken";
    /**
     * Get Search result for customers, RC instances, PC instances and IP
     */
    const wsSearch = "wsSearch";
    /**
     * Get CI data
     */
    const wsGetCI = "wsGetCI";
    /**
     * Set ptr record
     */
    const wsSetPTRRecord = "wsSetPTRRecord";
    /**
     * Get apns token
     */
    const wsGetApnsToken = "wsGetApnsToken";
    /**
     * Set ci
     */
    const wsSetCI = "wsSetCI";
    /**
     * Verify TOTP token
     */
    const wsVerifyTOTPToken = "wsVerifyTOTPToken";
    /**
     * Create remote access token
     */
    const wsCreateRemoteAccessToken = "wsCreateRemoteAccessToken";
    /**
     * Get file resource
     */
    const wsGetFileResource = "wsGetFileResource";
    /**
     * Get all ip's for given account_handle
     */
    const wsGetAllIPs = "wsGetAllIPs";
    /**
     * Get Timeline
     */
    const wsTimeline = "wsTimeline";
    /**
     * Get account handle from ip
     */
    const wsGetAccountHandleFromIP = "wsGetAccountHandleFromIP";
    /**
     * Get traffic statistics via ip
     */
    const wsGetTrafficStatisticsIPperDay = "wsGetTrafficStatisticsIPperDay";
    /**
     * Get traffic statistics via ip
     */
    const wsGetBackupUsage = "wsGetBackupUsage";
    /**
     * Get traffic reporting status
     */
    const wsGetTrafficReportingStatus = "wsGetTrafficReportingStatus";
    /**
     * Set traffic reporting config
     */
    const wsSetTrafficReporting = "wsSetTrafficReporting";
    /**
     * Get project servers
     */
    const wsGetIndividualServers = "wsGetIndividualServers";
    /**
     * Get project servers details
     */
    const wsGetIndividualServerDetails = "wsGetIndividualServerDetails";
    /**
     * Get project servers details
     */
    const wsGetIndividualServerCredentials = "wsGetIndividualServerCredentials";
    /**
     * Get project servers uplinks
     */
    const wsGetUplinks = "wsGetUplinks";
    /**
     * Get project servers uplink traffic
     */
    const wsGetUplinkTraffic = "wsGetUplinkTraffic";
    /**
     * Get project servers get racks
     */
    const wsGetRacks = "wsGetRacks";
    /**
     * Get project servers get racks power statistics
     */
    const wsGetRackPowerStatistic = "wsGetRackPowerStatistic";
    /**
     * Get old personal cloud types... (DEPRECATED)
     */
    const wsGetPersonalCloudTypes = "wsGetPersonalCloudTypes";
    /**
     * Calculate personal cloud price
     */
    const wsCalculatePersonalCloudPrice = "wsCalculatePersonalCloudPrice";
    /**
     * Get cloud server instance types
     */
    const wsCalculatePrice = "wsCalculatePrice";
    /**
     * Get cloud server instance types
     *
     * @param SimpleAccountHandleBean
     */
    const wsGetPersonalCloudInstanceTypes = "wsGetPersonalCloudInstanceTypes";
    /**
     * Get cloud server instances
     */
    const wsGetPersonalCloudInstances = "wsGetPersonalCloudInstances";
    /**
     * Start cloud server instances
     */
    const wsStartPersonalCloudInstance = "wsStartPersonalCloudInstance";
    /**
     * Stop cloud server instances
     */
    const wsStopPersonalCloudInstance = "wsStopPersonalCloudInstance";
    /**
     * Shutdown cloud server instances
     */
    const wsShutdownPersonalCloudInstance = "wsShutdownPersonalCloudInstance";
    /**
     * Reboot cloud server instances
     */
    const wsRebootPersonalCloudInstance = "wsRebootPersonalCloudInstance";
    /**
     * Recreate cloud server instances
     */
    const wsTriggerInstanceRecreate = "wsTriggerInstanceRecreate";
    /**
     * Get cloud server instance password
     */
    const wsGetPersonalCloudInstancePasswords = "wsGetPersonalCloudInstancePasswords";
    /**
     * Get AutoDNS zones
     */
    const wsGetAutoDNSZones = "wsGetAutoDNSZones";
    /**
     * Set AutoDNS credentials
     */
    const wsSetAutoDNSCredentials = "wsSetAutoDNSCredentials";
    /**
     * Get AutoDNS zones
     */
    const wsGetAutoDNSZone = "wsGetAutoDNSZone";
    /**
     * Update AutoDNS zones
     */
    const wsUpdateAutoDNSZone = "wsUpdateAutoDNSZone";
    /**
     * Update AutoDNS zones
     */
    const wsGetAutoDNSCredentials = "wsGetAutoDNSCredentials";
    /**
     * Get rc port forwarding
     */
    const wsGetRCPortForwarding = "wsGetRCPortForwarding";
    /**
     * Add rc port forwarding
     */
    const wsAddRCPortForwarding = "wsAddRCPortForwarding";
    /**
     * Update rc port forwarding
     */
    const wsUpdateRCPortForwarding = "wsUpdateRCPortForwarding";
    /**
     * Delete rc port forwarding
     */
    const wsDeleteRCPortForwarding = "wsDeleteRCPortForwarding";
    /**
     * Get smart os firewall rules
     */
    const wsGetSmartOSFirewallRules = "wsGetSmartOSFirewallRules";
    /**
     * Add/Update smart os firewall rule
     */
    const wsAddSmartOSFirewallRule = "wsAddSmartOSFirewallRule";
    /**
     * Delete smart os firewall rule
     */
    const wsDeleteSmartOSFirewallRule = "wsDeleteSmartOSFirewallRule";
    /**
     * Update smart os firewall status
     */
    const wsSetSmartOSInstanceFirewallStatus = "wsSetSmartOSInstanceFirewallStatus";
    /**
     * Get smart os firewall status
     */
    const wsGetSmartOSInstanceFirewallStatus = "wsGetSmartOSInstanceFirewallStatus";
    /**
     * Create smart os routing
     */
    const wsCreateSmartOSRouting = "wsCreateSmartOSRouting";
    /**
     * Delete smart os routing
     */
    const wsDeleteSmartOSRouting = "wsDeleteSmartOSRouting";
    /**
     * Get smart os routing
     */
    const wsGetSmartOSRouting = "wsGetSmartOSRouting";
    /**
     * Save ssl manager credentials
     */
    const wsSaveSSLManagerCredentials = "wsSaveSSLManagerCredentials";
    /**
     * Get ssl proxy entries
     */
    const wsGetSSLProxyEntries = "wsGetSSLProxyEntries";
    /**
     * Create ssl proxy entry
     */
    const wsCreateSSLProxy = "wsCreateSSLProxy";
    /**
     * Renew ssl proxy entry
     */
    const wsRenewSSLProxy = "wsRenewSSLProxy";
    /**
     * Get ssl proxy entry
     */
    const wsGetSSLProxyEntry = "wsGetSSLProxyEntry";
    /**
     * Delete ssl proxy entry
     */
    const wsDeleteSSLProxy = "wsDeleteSSLProxy";
    /**
     * Update ssl proxy entry
     */
    const wsUpdateSSLProxy = "wsUpdateSSLProxy";
    /**
     * Get ssl certificate types
     */
    const wsGetSSLCertificateTypes = "wsGetSSLCertificateTypes";
    /**
     * Get ssl certificate
     */
    const wsGetSSLCertificate = "wsGetSSLCertificate";
    /**
     * Get ssl manager credentials
     */
    const wsGetSSLManagerCredentials = "wsGetSSLManagerCredentials";
    /**
     * Get ssl certificates
     */
    const wsGetSSLCertificates = "wsGetSSLCertificates";
    /**
     * Triggers upgrade of cloud server vm with given parameters
     */
    const wsOrderInstanceResize = "wsOrderInstanceResize";
    /**
     * Creates a new account for ix or stech internal on internal path
     */
    const wsMergeBrandAccount = "wsMergeBrandAccount";
    /**
     * Get brand config ix or stech
     */
    const wsGetBrandConfiguration = "wsGetBrandConfiguration";
    /**
     * Get live PageMetriX results
     */
    const wsGetSSLMonitoringQuickCheck = "wsGetSSLMonitoringQuickCheck";
    /**
     * Register PageMetriX reports
     */
    const wsCreateSSLMonitoringFromInternal = "wsCreateSSLMonitoringFromInternal";
    /**
     * Get SSLProxy modules
     */
    const wsGetSSLProxyModules = "wsGetSSLProxyModules";
    /**
     * Get SSLProxy modules
     */
    const wsGetSSLProxyLocations = "wsGetSSLProxyLocations";
    /**
     * Purge cache of given SSLProxy id
     */
    const wsPurgeSSLProxyCache = "wsPurgeSSLProxyCache";
    /**
     * Get iso types
     */
    const wsGetIsoTypes = "wsGetIsoTypes";
    /**
     * Save DDoS information
     */
    const wsSaveDdosInformation = "wsSaveDdosInformation";
    /**
     * Getting DDoS information
     */
    const wsGetDdosInformation = "wsGetDdosInformation";
    /**
     * Getting DDoS information
     */
    const wsGetDdosDetails = "wsGetDdosDetails";
    /**
     * Mounting ISO Image
     */
    const wsTriggerIsoMount = "wsTriggerIsoMount";
    /**
     * Mounting ISO Image
     */
    const wsTriggerIsoUnmount = "wsTriggerIsoUnmount";
    /**
     * Calculating PROCEED Price
     */
    const wsCalculateSSLProxyPrice = "wsCalculateSSLProxyPrice";
    /**
     * Getting the PROCEED Templates
     */
    const wsGetSSLProxyTemplates = "wsGetSSLProxyTemplates";
    /**
     * Delete a the PROCEED Template
     */
    const wsDeleteSSLProxyTemplate = "wsDeleteSSLProxyTemplate";
    /**
     * Create new PROCEED Template
     */
    const wsCreateSSLProxyTemplate = "wsCreateSSLProxyTemplate";
    /**
     * Get Domainhandles
     */
    const wsGetDomainhandles = "wsGetDomainhandles";
    /**
     * Get Domains
     */
    const wsGetDomains = "wsGetDomains";
    /**
     * Registering Domains
     */
    const wsRegisterDomains = "wsRegisterDomains";
    /**
     * Getting domain price
     */
    const wsCalculateDomainPrice = "wsCalculateDomainPrice";
    /**
     * Check domain availabilities
     */
    const wsCheckDomainAvailabilities = "wsCheckDomainAvailabilities";
    /**
     * Getting available DomainTlDs
     */
    const wsGetAvailableDomainTlds = "wsGetAvailableDomainTlds";
    /**
     * Checking the available terms with the tlds
     */
    const wsCheckDomainTermAvailabilities = "wsCheckDomainTermAvailabilities";
    /**
     * Getting the available FAQs
     */
    const wsGetFAQ = "wsGetFAQ";
    /**
     * Creates a proceed bulk job
     */
    const wsOrderCertificateBulk = "wsOrderCertificateBulk";
    /**
     * Getting all account ips
     */
    const wsGetAllAccountIPs = "wsGetAllAccountIPs";
    /**
     * Getting all servers by customer number
     */
    const wsGetServersByCustomerNumber = "wsGetServersByCustomerNumber";

    /**
     * @param $wsType
     *
     * @return boolean
     */
    public function serviceExists($wsType)
    {
        try {
            $constant = "App\Services\BackendConnectionClient\BackendServiceEnum::$wsType";
            return defined($constant) ? true : false;

        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }
    }

}
