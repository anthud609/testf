<!DOCTYPE html>
<html>
<head>
    <title>BIMS</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <!-- Include Alpine.js for interactivity -->
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-50 h-screen overflow-hidden" x-data="{ mobileAsideOpen: false }">
  <div class="flex flex-col h-full">
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <div class="flex flex-1 overflow-hidden">
      <!-- Global Aside (Icon-Only) -->
      <aside
        class="hidden md:flex flex-col items-center w-20 bg-white border-r border-gray-200 py-6 space-y-5 flex-shrink-0"
      >
    <?php include __DIR__ . '/../partials/aside.php'; ?>
    </aside>
    <main class="flex-1 overflow-y-auto">
<!-- EMPLOYEE SUMMARY HEADER -->
<header x-data="{ showMore: false }"
        class="sticky top-0 z-20 bg-white border-b border-gray-200 shadow px-4 py-2 w-full">
  <!-- Line 1: Identity + Utilities -->
  <div class="flex items-center justify-between">
    <!-- Identity Group -->
    <div class="flex items-center space-x-3 min-w-0">
      <div
        class="aspect-square w-12 rounded-full bg-green-200 flex items-center justify-center text-lg font-semibold text-green-800 flex-shrink-0">
        JD
      </div>
      <div class="flex flex-col truncate">
        <div class="flex items-center space-x-1">
          <h1 class="truncate text-lg font-semibold text-gray-800">
            Johnathan M. Johnson
          </h1>
          <span class="text-sm text-gray-500">(John)</span>
          <span
            class="px-2 py-0.5 text-xs font-medium text-white bg-red-600 rounded">
            Terminated
          </span>
        </div>
      </div>
    </div>
    <!-- Utility Buttons: Switcher, Alerts, Actions -->
    <div class="flex items-center space-x-2 flex-shrink-0">
      <button
        class="inline-flex items-center px-2 py-1 text-sm text-gray-600 border border-gray-300 rounded hover:bg-gray-100">
        <i class="fas fa-user-friends mr-1"></i> Switch
      </button>
      <button
        class="relative inline-flex items-center px-2 py-1 text-sm text-gray-600 border border-gray-300 rounded hover:bg-gray-100">
        <i class="fas fa-bell mr-1"></i>
        <span>Alerts</span>
        <span
          class="absolute top-0 right-0 -mt-1 -mr-1 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-semibold text-white bg-red-600 rounded-full">
          3
        </span>
      </button>
      <button
        class="inline-flex items-center px-2 py-1 bg-purple-600 text-white text-sm rounded hover:bg-purple-700">
        <i class="fas fa-ellipsis-h mr-1"></i> Actions
      </button>
    </div>
  </div>

  <!-- Line 2: Primary Work Info -->
  <div class="mt-2 flex flex-wrap items-center space-x-4 text-sm text-gray-600">
    <div class="flex items-center space-x-1">
      <i class="fas fa-sitemap text-gray-400"></i>
      <span class="font-medium">LOB:</span>
      <span>Walmart Ecommerce</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-user-cog text-gray-400"></i>
      <span class="font-medium">Job:</span>
      <span>Escalations Rep I AH</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-users text-gray-400"></i>
      <span class="font-medium">Team:</span>
      <span>Alpha</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-user-tie text-gray-400"></i>
      <span class="font-medium">Manager:</span>
      <a href="#" class="text-blue-600 hover:underline">Lisa Smellybottom</a>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-globe text-gray-400"></i>
      <span class="font-medium">TZ:</span>
      <span>EST</span>
    </div>
  </div>

  <!-- Line 3: More Info (toggleable) -->
  <div x-show="showMore" class="mt-2 flex flex-wrap items-center space-x-6 text-sm text-gray-600">
    <div class="flex items-center space-x-1">
      <i class="fas fa-id-badge text-gray-400"></i>
      <span class="font-medium">EID:</span>
      <span>524343253</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-id-card text-gray-400"></i>
      <span class="font-medium">Badge:</span>
      <span>2315</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-calendar-alt text-gray-400"></i>
      <span class="font-medium">Hired:</span>
      <span>12/31/2020</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-user-clock text-gray-400"></i>
      <span class="font-medium">Class:</span>
      <span>FT-NE</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-briefcase text-gray-400"></i>
      <span class="font-medium">Type:</span>
      <span>Full-Time</span>
    </div>
    <div class="flex items-center space-x-1">
      <i class="fas fa-building text-gray-400"></i>
      <span class="font-medium">Site:</span>
      <span>MacBook Air-1</span>
    </div>
    <div class="flex items-center space-x-1">
      <span class="w-2 h-2 bg-green-500 rounded-full"></span>
      <span>Online • Last Active 2m ago</span>
    </div>
  </div>

  <!-- Line 4: Toggle More/Less Info -->
  <div class="mt-2 flex justify-end">
    <button @click="showMore = !showMore"
            class="text-sm text-blue-600 hover:underline">
      <span x-text="showMore ? 'Less Info' : 'More Info'"></span>
    </button>
  </div>
</header>


<!-- SNIPPET START -->
<div class="flex flex-1 min-h-0 relative"><!-- CHANGED from overflow-hidden -->
    <!-- Backdrop for smaller screens -->
    <div
      class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden"
      :class="{ 'block': mobileAsideOpen, 'hidden': !mobileAsideOpen }"
      @click="mobileAsideOpen = false"
    ></div>
  
    <!-- SIDEBAR -->
    <aside
      x-data="{ openSection: null }"
      class="
        w-64 bg-gray-50 border-r border-gray-200 shadow-inner py-4 flex-shrink-0
        fixed inset-y-0 left-0 z-50 transform transition-transform duration-300
        -translate-x-full             /* Hide off-canvas by default on small screens */
        lg:relative lg:translate-x-0  /* Normal position on lg+ */
        lg:z-auto
        overflow-y-auto
        h-full                        /* Ensures the aside fills height and can scroll */
      "
      :class="{ 'translate-x-0': mobileAsideOpen }"
    >
      <!-- Overview -->
      <div class="rounded-md overflow-hidden mb-1">
        <a
          href="#overview"
          class="flex items-center w-full px-3 py-2 transition hover:bg-purple-100"
        >
          <span class="w-5 flex-shrink-0 text-center text-gray-600">
            <i class="fas fa-home"></i>
          </span>
          <span class="ml-3 font-semibold text-gray-800 truncate"
            >Employee Snapshot</span
          >
        </a>
      </div>
  
      <!-- Personal Data -->
      <div class="rounded-md overflow-hidden mb-1">
        <button
          @click="openSection = openSection==='personalData' ? null : 'personalData'"
          class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
          :class="openSection==='personalData'
                  ? 'bg-purple-200 text-purple-900 font-semibold'
                  : 'text-gray-700'"
        >
          <div class="flex items-center min-w-0">
            <span class="w-5 flex-shrink-0 text-center text-gray-600">
              <i class="fas fa-id-card"></i>
            </span>
            <span class="ml-3 truncate">Personal Data</span>
          </div>
          <div class="flex items-center space-x-2">
            <span
              class="inline-flex px-2 py-0.5 text-xs font-semibold bg-green-100 text-green-800 rounded-full"
            >
              2
            </span>
            <i
              :class="openSection==='personalData' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
              class="text-gray-600 text-sm"
            ></i>
          </div>
        </button>
  
        <nav
          x-show="openSection==='personalData'"
          x-collapse
          class="bg-purple-100"
        >
        <!-- If emp/applicant in onboarding stage, thius will always show first-->
     <a
  v-if="userStatus === 'onboarding'"
  href="#onboardingChecklist"
  class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 bg-purple-50 border-l-4 border-purple-500 text-gray-900 font-semibold"
>
  <span class="w-5 flex-shrink-0 text-center text-purple-600 text-sm">
    <i class="fas fa-clipboard-check"></i>
  </span>
  <span class="ml-3 truncate flex items-center gap-2">
    Onboarding Status
    <span class="inline-flex h-4 w-4 rounded-full text-xs font-medium bg-yellow-200 text-yellow-800 rounded-full">
      
    </span>
  </span>
</a>

          <a
            href="#personalInfo"
            class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 text-gray-800"
          >
            <span
              class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"
            >
              <i class="fas fa-user"></i>
            </span>
            <span class="ml-3 truncate">Personal Info</span>
          </a>
          <a
            href="#contactInfo"
            class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 text-gray-800"
          >
            <span
              class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"
            >
              <i class="fas fa-address-book"></i>
            </span>
            <span class="ml-3 truncate">Contact Info</span>
          </a>
          <a
            href="#dependents"
            class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 font-bold text-gray-900"
          >
            <span
              class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"
            >
              <i class="fas fa-user-friends"></i>
            </span>
            <span class="ml-3 truncate">Dependents</span>
          </a>
          <a
            href="#emergencyContacts"
            class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 text-gray-800"
          >
            <span
              class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"
            >
              <i class="fas fa-phone-volume"></i>
            </span>
            <span class="ml-3 truncate">Emergency Contacts</span>
          </a>
          
      <a
      href="#previousEmployers"
      class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
    >
      <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
        <i class="fas fa-arrow-left"></i>
      </span>
      <span class="ml-3 truncate">Previous Employers</span>
    </a>
          
      <a
      href="#educationHistory"
      class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
    >
      <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
        <i class="fas fa-graduation-cap"></i>
      </span>
      <span class="ml-3 truncate">Education History</span>
    </a>
          <a
            href="#offboardingExitInterview"
            class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 text-gray-800"
          >
            <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
              <i class="fas fa-sign-out-alt"></i>
            </span>
            <span class="ml-3 truncate">Offboarding / Exit</span>
          </a>
          <a
            href="#backgroundScreening"
            class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-200 text-gray-800"
          >
            <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
              <i class="fas fa-search"></i>
            </span>
            <span class="ml-3 truncate">Background & Screening</span>
          </a>
        </nav>
      </div>
  

        <!-- Employment & Assignment -->
  <div class="rounded-md overflow-hidden mb-1">
    <button
      @click="openSection = openSection==='employmentAssignment' ? null : 'employmentAssignment'"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="openSection==='employmentAssignment'
              ? 'bg-purple-200 text-purple-900 font-semibold'
              : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-briefcase"></i>
        </span>
        <span class="ml-3 truncate">Employment Info</span>
      </div>
      <div class="flex items-center space-x-2">
        <i
          :class="openSection==='employmentAssignment' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
          class="text-gray-600 text-sm"
        ></i>
      </div>
    </button>
  
    <nav
      x-show="openSection==='employmentAssignment'"
      x-collapse
      class="bg-purple-100"
    >
      <a
        href="#employmentAssignmentInfo"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-info-circle"></i>
        </span>
        <span class="ml-3 truncate">Assignments</span>
      </a>
      <a
        href="#previousApplications"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-file"></i>
        </span>
        <span class="ml-3 truncate">Previous Applications</span>
      </a>
      <a
        href="#changeAssignment"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-exchange-alt"></i>
        </span>
        <span class="ml-3 truncate">Change Assignment</span>
      </a>
      <a
        href="#changeManager"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-user-tie"></i>
        </span>
        <span class="ml-3 truncate">Change Manager</span>
      </a>
      <a
        href="#orgHierarchy"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-users"></i>
        </span>
        <span class="ml-3 truncate">Org Hierarchy</span>
      </a>
      <a
        href="#terminateOffboarding"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-sign-out-alt"></i>
        </span>
        <span class="ml-3 truncate">Terminate / Offboard</span>
      </a>
      <a
        href="#promotionHistory"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-arrow-up"></i>
        </span>
        <span class="ml-3 truncate">Promotion History</span>
      </a>
      <a
        href="#mobilityRotationPlans"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-random"></i>
        </span>
        <span class="ml-3 truncate">Mobility & Rotation Plans</span>
      </a>
    </nav>
  </div>
  
  <!-- Compensation & Payroll -->
<div class="rounded-md overflow-hidden mb-1">
    <button
      @click="openSection = openSection==='compensationPayroll' ? null : 'compensationPayroll'"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="openSection==='compensationPayroll'
              ? 'bg-purple-200 text-purple-900 font-semibold'
              : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-dollar-sign"></i>
        </span>
        <span class="ml-3 truncate">Payroll</span>
      </div>
      <div class="flex items-center space-x-2">
        <i
          :class="openSection==='compensationPayroll' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
          class="text-gray-600 text-sm"
        ></i>
      </div>
    </button>
  
    <nav
      x-show="openSection==='compensationPayroll'"
      x-collapse
      class="bg-purple-100"
    >
    <a
      href="#payrollSummary"
      class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
    >
      <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
        <i class="fas fa-chart-line"></i>
      </span>
      <span class="ml-3 truncate">Payroll Summary</span>
    </a>
      <a
        href="#payrollSetupRates"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-cogs"></i>
        </span>
        <span class="ml-3 truncate">Pay Rates</span>
      </a>
      <a
        href="#earningsDeductions"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-calculator"></i>
        </span>
        <span class="ml-3 truncate">Earnings & Deductions</span>
      </a>
      <a
        href="#taxSetupView"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-file-invoice-dollar"></i>
        </span>
        <span class="ml-3 truncate">Tax Details</span>
      </a>
      <a
        href="#directDeposit"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-piggy-bank"></i>
        </span>
        <span class="ml-3 truncate">Direct Deposit</span>
      </a>
      <a
        href="#laborAllocation"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-hand-holding-usd"></i>
        </span>
        <span class="ml-3 truncate">Labor Allocation</span>
      </a>
      <a
        href="#payrollDisputes"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-balance-scale"></i>
        </span>
        <span class="ml-3 truncate">Payroll Disputes</span>
      </a>
      <a
        href="#bonusesIncentives"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-gift"></i>
        </span>
        <span class="ml-3 truncate">Bonuses & Incentives</span>
      </a>
      <a
        href="#salaryHistory"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-history"></i>
        </span>
        <span class="ml-3 truncate">Payroll History</span>
      </a>
      <a
        href="#compensationPlanning"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-calculator"></i>
        </span>
        <span class="ml-3 truncate">Compensation Planning</span>
      </a>
    </nav>
  </div>
  
<!-- Benefits & Insurance -->
<div class="rounded-md overflow-hidden mb-1">
    <button
      @click="openSection = openSection==='benefitsInsurance' ? null : 'benefitsInsurance'"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="openSection==='benefitsInsurance'
              ? 'bg-purple-200 text-purple-900 font-semibold'
              : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-clinic-medical"></i>
        </span>
        <span class="ml-3 truncate">Benefits & Insurance</span>
      </div>
      <div class="flex items-center space-x-2">
        <i
          :class="openSection==='benefitsInsurance' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
          class="text-gray-600 text-sm"
        ></i>
      </div>
    </button>
  
    <nav x-show="openSection==='benefitsInsurance'" x-collapse class="bg-purple-100">
      <a href="#benefitsEnrollment" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-clipboard-check"></i></span>
        <span class="ml-3 truncate">Benefits Enrollment</span>
      </a>
  
      <a href="#planComparison" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-balance-scale-left"></i></span>
        <span class="ml-3 truncate">Plan Comparison Tool</span>
      </a>
  
      <a href="#retirementPlans" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-piggy-bank"></i></span>
        <span class="ml-3 truncate">Retirement Plans</span>
      </a>
      <a href="#401k" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">401(k) Contributions</a>
      <a href="#employerMatch" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Employer Match</a>
      <a href="#vestingSchedule" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Vesting Schedule</a>
  
      <a href="#insurancePlans" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-shield-alt"></i></span>
        <span class="ml-3 truncate">Insurance Plans</span>
      </a>
      <a href="#medical" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Medical</a>
      <a href="#dental" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Dental</a>
      <a href="#vision" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Vision</a>
      <a href="#lifeAdd" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Life & AD&D</a>
      <a href="#disability" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Disability (STD/LTD)</a>
  
      <a href="#coverageDetails" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-file-medical-alt"></i></span>
        <span class="ml-3 truncate">Coverage Details</span>
      </a>
      <a href="#effectiveDates" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Effective Dates</a>
      <a href="#coveredDependents" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Covered Dependents</a>
      <a href="#tierLevel" class="flex items-center w-full px-3 py-2 pl-8 text-sm transition hover:bg-purple-100 text-gray-700">Tier Level</a>
  
      <a href="#claimsEOBs" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-file-invoice-dollar"></i></span>
        <span class="ml-3 truncate">Claims & EOBs</span>
      </a>
  
      <a href="#hsaFsa" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-wallet"></i></span>
        <span class="ml-3 truncate">HSA / FSA Management</span>
      </a>
  
      <a href="#beneficiaries" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-user-shield"></i></span>
        <span class="ml-3 truncate">Beneficiaries</span>
      </a>
  
      <a href="#openEnrollmentHistory" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-history"></i></span>
        <span class="ml-3 truncate">Open Enrollment History</span>
      </a>
  
      <a href="#cobra" class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800" v-if="user.employmentStatus === 'terminated'">
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm"><i class="fas fa-door-open"></i></span>
        <span class="ml-3 truncate">COBRA / Post-Termination Coverage</span>
      </a>
    </nav>
  </div>
  

<!-- Time, Leave & Attendance -->
<div x-data="{ open: false, sub: null }" class="rounded-md overflow-hidden mb-1">
    <button
      @click="open = !open"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="open ? 'bg-purple-200 text-purple-900 font-semibold' : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-clock"></i>
        </span>
        <span class="ml-3 truncate">Time & Attendance</span>
      </div>
      <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-gray-600 text-sm"></i>
    </button>
  
    <nav x-show="open" x-collapse class="bg-purple-100">
  
      <!-- Work Schedule Group -->
      <div>
        <button @click="sub = sub === 'work' ? null : 'work'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-calendar-day"></i></span>
          <span class="ml-3 flex-1 truncate">Work Schedule</span>
          <i :class="sub === 'work' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'work'" x-collapse class="pl-10">
          <a href="#assignedShifts" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Assigned Shifts</a>
          <a href="#scheduleOverrides" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Overrides / Exceptions</a>
          <a href="#recurringPatterns" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Recurring Patterns</a>
        </div>
      </div>
  
      <!-- Clock-In / Out -->
      <a href="#clockInOutLogs" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800 transition">
        <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-clock"></i></span>
        <span class="ml-3 truncate">Clock-In / Out Logs</span>
      </a>
  
      <!-- Time Off Group -->
      <div>
        <button @click="sub = sub === 'timeoff' ? null : 'timeoff'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-calendar-alt"></i></span>
          <span class="ml-3 flex-1 truncate">Time Off Management</span>
          <i :class="sub === 'timeoff' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'timeoff'" x-collapse class="pl-10">
          <a href="#absencesTimeOffHistory" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Absences & History</a>
          <a href="#timeOffBalancesAccruals" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Balances & Accruals</a>
          <a href="#leaveRequests" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Leave Requests</a>
        </div>
      </div>
  
      <!-- Shift Management -->
      <div>
        <button @click="sub = sub === 'shift' ? null : 'shift'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-exchange-alt"></i></span>
          <span class="ml-3 flex-1 truncate">Shift Management</span>
          <i :class="sub === 'shift' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'shift'" x-collapse class="pl-10">
          <a href="#shiftSwapCoverage" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Swap / Coverage</a>
          <a href="#coverageRequests" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Coverage Requests</a>
          <a href="#swapHistory" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Swap History</a>
        </div>
      </div>
  
      <!-- Holiday Policies -->
      <a href="#holidayPolicies" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800 transition">
        <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-gift"></i></span>
        <span class="ml-3 truncate">Holiday Policies</span>
      </a>
  
      <!-- Timesheet Approvals -->
      <a href="#timesheetApprovals" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800 transition">
        <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-check-circle"></i></span>
        <span class="ml-3 truncate">Timesheet Approvals</span>
      </a>
  
    </nav>
  </div>
  
  
<!-- Performance -->
<div x-data="{ open: false, sub: null }" class="rounded-md overflow-hidden mb-1">
    <button
      @click="open = !open"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="open ? 'bg-purple-200 text-purple-900 font-semibold' : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-chart-line"></i></span>
        <span class="ml-3 truncate">Performance</span>
      </div>
      <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-gray-600 text-sm"></i>
    </button>
  
    <nav x-show="open" x-collapse class="bg-purple-100">
  
      <!-- Goals & Development Group -->
      <div>
        <button @click="sub = sub === 'goals' ? null : 'goals'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-bullseye"></i></span>
          <span class="ml-3 flex-1 truncate">Goals & Development</span>
          <i :class="sub === 'goals' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'goals'" x-collapse class="pl-10">
          <a href="#goalsOverview" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Goals Overview</a>
          <a href="#editDevelopment" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Add / Edit Development Items</a>
          <a href="#careerPlan" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Career Development Plan</a>
          <a href="#skillsQualifications" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Skills & Qualifications</a>
        </div>
      </div>
  
      <!-- Reviews Group -->
      <div>
        <button @click="sub = sub === 'reviews' ? null : 'reviews'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-star"></i></span>
          <span class="ml-3 flex-1 truncate">Performance Reviews</span>
          <i :class="sub === 'reviews' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'reviews'" x-collapse class="pl-10">
          <a href="#managerReviews" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Manager Reviews</a>
          <a href="#hrReviews" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">HR Reviews</a>
          <a href="#talentRatings" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Talent Ratings</a>
        </div>
      </div>
  
      <!-- Coaching / Conversations -->
      <div>
        <button @click="sub = sub === 'coaching' ? null : 'coaching'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-comments"></i></span>
          <span class="ml-3 flex-1 truncate">Coaching & Feedback</span>
          <i :class="sub === 'coaching' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'coaching'" x-collapse class="pl-10">
          <a href="#oneOnOneMeetings" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">1-on-1 / Manager Meetings</a>
          <a href="#feedbackHistory" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Feedback History</a>
        </div>
      </div>
  
      <!-- Accountability -->
      <div>
        <button @click="sub = sub === 'accountability' ? null : 'accountability'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-exclamation-triangle"></i></span>
          <span class="ml-3 flex-1 truncate">Accountability</span>
          <i :class="sub === 'accountability' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'accountability'" x-collapse class="pl-10">
          <a href="#writeUps" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Write-Ups / PIP</a>
          <a href="#successionPlanning" class="block py-1 text-sm px-2 rounded hover:bg-purple-200 text-gray-700">Succession Planning</a>
        </div>
      </div>
  
    </nav>
  </div>
  
<!-- Learning -->
<div x-data="{ open: false, sub: null }" class="rounded-md overflow-hidden mb-1">
    <button
      @click="open = !open"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="open ? 'bg-purple-200 text-purple-900 font-semibold' : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 text-center text-gray-600">
          <i class="fas fa-graduation-cap"></i>
        </span>
        <span class="ml-3 truncate">Learning</span>
      </div>
      <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-gray-600 text-sm"></i>
    </button>
  
    <nav x-show="open" x-collapse class="bg-purple-100">
  
      <!-- LMS Courses -->
      <div>
        <button @click="sub = sub === 'courses' ? null : 'courses'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-book"></i></span>
          <span class="ml-3 flex-1 truncate">LMS Courses</span>
          <i :class="sub === 'courses' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'courses'" x-collapse class="pl-10">
          <a href="#assignedCourses" class="block py-1 text-sm px-2 rounded hover:bg-blue-100 text-gray-700">📘 Assigned Courses</a>
          <a href="#mandatoryCourses" class="block py-1 text-sm px-2 rounded hover:bg-blue-100 text-gray-700">📋 Mandatory Trainings</a>
          <a href="#electiveCourses" class="block py-1 text-sm px-2 rounded hover:bg-blue-100 text-gray-700">📚 Electives</a>
        </div>
      </div>
  
      <!-- Course Completions -->
      <div>
        <button @click="sub = sub === 'completions' ? null : 'completions'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-check-circle"></i></span>
          <span class="ml-3 flex-1 truncate">Course Completions</span>
          <i :class="sub === 'completions' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'completions'" x-collapse class="pl-10">
          <a href="#completedCourses" class="block py-1 text-sm px-2 rounded hover:bg-green-100 text-gray-700">✅ Completed</a>
          <a href="#incompleteCourses" class="block py-1 text-sm px-2 rounded hover:bg-yellow-100 text-gray-700">🕓 In Progress</a>
          <a href="#expiredCerts" class="block py-1 text-sm px-2 rounded hover:bg-red-100 text-gray-700">⚠️ Expired Certifications</a>
        </div>
      </div>
  
      <!-- Quizzes & Assessments -->
      <div>
        <button @click="sub = sub === 'quizzes' ? null : 'quizzes'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800 transition">
          <span class="w-5 text-center text-gray-600 text-sm"><i class="fas fa-pen"></i></span>
          <span class="ml-3 flex-1 truncate">Quizzes & Assessments</span>
          <i :class="sub === 'quizzes' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'quizzes'" x-collapse class="pl-10 border-l-2 border-purple-300 ml-2 mt-1">
          <a href="#quizScores" class="block py-1 text-sm px-2 rounded hover:bg-indigo-100 text-gray-700">📝 Quiz Scores</a>
          <a href="#finalAssessments" class="block py-1 text-sm px-2 rounded hover:bg-indigo-100 text-gray-700">🎓 Final Assessments</a>
          <a href="#proctoringReports" class="block py-1 text-sm px-2 rounded hover:bg-indigo-100 text-gray-700">🔍 Proctoring Reports</a>
        </div>
      </div>
  
    </nav>
  </div>
  
  
<!-- Documents & Compliance -->
<div x-data="{ open: false, sub: null }" class="rounded-md overflow-hidden mb-1">
    <button
      @click="open = !open"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="open ? 'bg-purple-200 text-purple-900 font-semibold' : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-folder"></i></span>
        <span class="ml-3 truncate">Documents</span>
      </div>
      <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-gray-600 text-sm"></i>
    </button>
  
    <nav x-show="open" x-collapse class="bg-purple-100">
  
      <a href="#documentRepository" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-slate-100 text-gray-800 transition">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-archive"></i></span>
        <span class="ml-3 truncate">Document Repository</span>
      </a>
  
      <div>
        <button @click="sub = sub === 'docTypes' ? null : 'docTypes'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800">
          <span class="w-5 text-center text-gray-600"><i class="fas fa-plus-circle"></i></span>
          <span class="ml-3 flex-1 truncate">Add Document</span>
          <i :class="sub === 'docTypes' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'docTypes'" x-collapse class="pl-10 border-l-2 border-purple-300 ml-2">
          <a href="#addCheckInDocument" class="block py-1 text-sm px-2 rounded hover:bg-green-100 text-gray-700">📥 "Check-In" Document</a>
          <a href="#addAnytimeDocument" class="block py-1 text-sm px-2 rounded hover:bg-blue-100 text-gray-700">📄 "Anytime" Document</a>
          <a href="#uploadOther" class="block py-1 text-sm px-2 rounded hover:bg-yellow-100 text-gray-700">📁 Other Uploads</a>
        </div>
      </div>
  
      <a href="#auditChangeHistory" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-history"></i></span>
        <span class="ml-3 truncate">Audit & Change History</span>
      </a>
  
    </nav>
  </div>
  
  <!-- Security, Access & IT -->
<div x-data="{ open: false, sub: null }" class="rounded-md overflow-hidden mb-1">
    <button
      @click="open = !open"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="open ? 'bg-purple-200 text-purple-900 font-semibold' : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-shield-alt"></i></span>
        <span class="ml-3 truncate">Security, Access & IT</span>
      </div>
      <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-gray-600 text-sm"></i>
    </button>
  
    <nav x-show="open" x-collapse class="bg-purple-100">
  
      <a href="#userAppsPermissions" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-user-lock"></i></span>
        <span class="ml-3 truncate">User Apps & Permissions</span>
      </a>
  
      <a href="#externalIds" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-passport"></i></span>
        <span class="ml-3 truncate">External IDs</span>
      </a>
  
      <a href="#systemAccess2FAStatus" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-lock"></i></span>
        <span class="ml-3 truncate">System Access / 2FA</span>
      </a>
  
      <!-- Assets Section -->
      <div>
        <button @click="sub = sub === 'assets' ? null : 'assets'" class="flex items-center w-full px-3 py-2 pl-6 text-left hover:bg-purple-200 text-gray-800">
          <span class="w-5 text-center text-gray-600"><i class="fas fa-briefcase"></i></span>
          <span class="ml-3 flex-1 truncate">Company Property</span>
          <i :class="sub === 'assets' ? 'fas fa-minus' : 'fas fa-plus'" class="text-xs text-gray-600"></i>
        </button>
        <div x-show="sub === 'assets'" x-collapse class="pl-10 border-l-2 border-purple-300 ml-2">
          <a href="#companyPropertyAssets" class="block py-1 text-sm px-2 rounded hover:bg-slate-100 text-gray-700">🧳 Asset List</a>
          <a href="#equipmentSoftware" class="block py-1 text-sm px-2 rounded hover:bg-slate-100 text-gray-700">💻 Equipment & Software</a>
        </div>
      </div>
  
      <a href="#serviceDeskTickets" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-ticket-alt"></i></span>
        <span class="ml-3 truncate">Service Desk Tickets</span>
      </a>
  
      <a href="#facilityBadgeAccess" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-id-badge"></i></span>
        <span class="ml-3 truncate">Facility & Badge Access</span>
      </a>
  
      <a href="#uiNotificationPreferences" class="flex items-center w-full px-3 py-2 pl-6 hover:bg-purple-200 text-gray-800">
        <span class="w-5 text-center text-gray-600"><i class="fas fa-bell"></i></span>
        <span class="ml-3 truncate">UI & Notification Preferences</span>
      </a>
  
    </nav>
  </div>
  

  
  <!-- Compliance & Certifications -->
  <div class="rounded-md overflow-hidden mb-1">
    <button
      @click="openSection = openSection==='complianceCertifications' ? null : 'complianceCertifications'"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="openSection==='complianceCertifications'
              ? 'bg-purple-200 text-purple-900 font-semibold'
              : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-check-circle"></i>
        </span>
        <span class="ml-3 truncate">Compliance</span>
      </div>
      <div class="flex items-center space-x-2">
        <i
          :class="openSection==='complianceCertifications' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
          class="text-gray-600 text-sm"
        ></i>
      </div>
    </button>
  
    <nav
      x-show="openSection==='complianceCertifications'"
      x-collapse
      class="bg-purple-100"
    >
      <a
        href="#eeoDiversitySelfID"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-user-check"></i>
        </span>
        <span class="ml-3 truncate">EEO / Diversity Self-ID</span>
      </a>
      <a
        href="#workAuthorizationVisa"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-passport"></i>
        </span>
        <span class="ml-3 truncate">Work Authorization / Visa</span>
      </a>
      <a
        href="#licenseCertificationMatrix"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-certificate"></i>
        </span>
        <span class="ml-3 truncate">License & Certification Matrix</span>
      </a>
      <a
        href="#policyAcknowledgements"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-file-alt"></i>
        </span>
        <span class="ml-3 truncate">Policy Acknowledgements</span>
      </a>
    </nav>
  </div>
  
  <!-- Health, Safety & Incidents -->
  <div class="rounded-md overflow-hidden mb-1">
    <button
      @click="openSection = openSection==='healthSafetyIncidents' ? null : 'healthSafetyIncidents'"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="openSection==='healthSafetyIncidents'
              ? 'bg-purple-200 text-purple-900 font-semibold'
              : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-heartbeat"></i>
        </span>
        <span class="ml-3 truncate">Health & Wellness</span>
      </div>
      <div class="flex items-center space-x-2">
        <i
          :class="openSection==='healthSafetyIncidents' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
          class="text-gray-600 text-sm"
        ></i>
      </div>
    </button>
  
    <nav
      x-show="openSection==='healthSafetyIncidents'"
      x-collapse
      class="bg-purple-100"
    >
      <a
        href="#workersCompensation"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-notes-medical"></i>
        </span>
        <span class="ml-3 truncate">Worker’s Compensation</span>
      </a>
      <a
        href="#healthAccommodation"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-hospital"></i>
        </span>
        <span class="ml-3 truncate">Health & Accommodation</span>
      </a>
      <a
        href="#incidentReports"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-exclamation-triangle"></i>
        </span>
        <span class="ml-3 truncate">Incident Reports</span>
      </a>
    </nav>
  </div>
  
  <!-- Communications & Notes -->
  <div class="rounded-md overflow-hidden mb-1">
    <button
      @click="openSection = openSection==='communicationsNotes' ? null : 'communicationsNotes'"
      class="flex items-center justify-between w-full px-3 py-2 transition hover:bg-purple-100"
      :class="openSection==='communicationsNotes'
              ? 'bg-purple-200 text-purple-900 font-semibold'
              : 'text-gray-700'"
    >
      <div class="flex items-center min-w-0">
        <span class="w-5 flex-shrink-0 text-center text-gray-600">
          <i class="fas fa-comment-dots"></i>
        </span>
        <span class="ml-3 truncate">Communication</span>
      </div>
      <div class="flex items-center space-x-2">
        <i
          :class="openSection==='communicationsNotes' ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
          class="text-gray-600 text-sm"
        ></i>
      </div>
    </button>
  
    <nav
      x-show="openSection==='communicationsNotes'"
      x-collapse
      class="bg-purple-100"
    >
      <a
        href="#managerHRNotes"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-user-tie"></i>
        </span>
        <span class="ml-3 truncate">Manager & HR Notes</span>
      </a>
      <a
        href="#employeeSurveysEngagement"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-poll"></i>
        </span>
        <span class="ml-3 truncate">Employee Surveys / Engagement</span>
      </a>
      <a
        href="#announcementsBulletinBoard"
        class="flex items-center w-full px-3 py-2 pl-6 transition hover:bg-purple-100 text-gray-800"
      >
        <span class="w-5 flex-shrink-0 text-center text-gray-600 text-sm">
          <i class="fas fa-bullhorn"></i>
        </span>
        <span class="ml-3 truncate">Announcements / Bulletin Board</span>
      </a>
    </nav>
  </div>
  
    </aside>
  
    <!-- MAIN CONTENT -->
    <section id="overview" class="p-4 flex-1 overflow-y-auto"><!-- CHANGED to overflow-y-auto -->
      <!-- Personal Info -->
      <div
        class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transform hover:-translate-y-1 transition"
      >
        <h3 class="flex items-center text-xl font-semibold text-purple-600 mb-4">
          <span class="p-2 bg-purple-100 rounded-full mr-3"
            ><i class="fas fa-info-circle text-purple-700"></i
          ></span>
          Personal Info
        </h3>
        <ul class="text-gray-700 space-y-2 text-sm">
          <li><strong>Email:</strong> john.johnson@example.com</li>
          <li><strong>Phone:</strong> (555) 123-4567</li>
          <li><strong>Location:</strong> New York, NY</li>
          <li><strong>Department:</strong> Escalations Support</li>
        </ul>
      </div>
      <!-- Performance -->
      <div
        class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transform hover:-translate-y-1 transition"
      >
        <h3 class="flex items-center text-xl font-semibold text-purple-600 mb-4">
          <span class="p-2 bg-purple-100 rounded-full mr-3"
            ><i class="fas fa-chart-line text-purple-700"></i
          ></span>
          Performance
        </h3>
        <div class="space-y-3 text-gray-700 text-sm">
          <div class="flex justify-between"
            ><span>Quality Score</span
            ><span class="font-medium">92%</span>
          </div>
          <div class="flex justify-between"
            ><span>Adherence</span
            ><span class="font-medium">98%</span>
          </div>
          <div class="flex justify-between"
            ><span>Avg. Handle Time</span
            ><span class="font-medium">5m 32s</span>
          </div>
        </div>
      </div>
      <!-- Attendance -->
      <div
        class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transform hover:-translate-y-1 transition"
      >
        <h3 class="flex items-center text-xl font-semibold text-purple-600 mb-4">
          <span class="p-2 bg-purple-100 rounded-full mr-3"
            ><i class="fas fa-calendar-check text-purple-700"></i
          ></span>
          Attendance
        </h3>
        <div class="space-y-3 text-gray-700 text-sm">
          <div class="flex justify-between"
            ><span>Today’s Status</span
            ><span class="text-green-600 font-semibold">On Time</span>
          </div>
          <div class="flex justify-between"
            ><span>Shifts Remaining</span
            ><span class="font-medium">2</span>
          </div>
          <div class="flex justify-between"
            ><span>Leave Balance</span
            ><span class="font-medium">5 days</span>
          </div>
        </div>
      </div>
      <!-- Upcoming Shifts -->
      <div
        class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transform hover:-translate-y-1 transition sm:col-span-2 lg:col-span-3"
      >
        <h3 class="flex items-center text-xl font-semibold text-purple-600 mb-4">
          <span class="p-2 bg-purple-100 rounded-full mr-3"
            ><i class="fas fa-clock text-purple-700"></i
          ></span>
          Upcoming Shifts
        </h3>
        <ul class="space-y-4 text-gray-700 text-sm">
          <li class="flex justify-between items-center">
            <span
              ><span class="font-medium">Apr 28, 2025</span> —
              08:00 AM – 04:00 PM</span
            >
            <a href="#" class="text-purple-600 hover:underline"
              >Details</a
            >
          </li>
          <li class="flex justify-between items-center">
            <span
              ><span class="font-medium">Apr 29, 2025</span> —
              12:00 PM – 08:00 PM</span
            >
            <a href="#" class="text-purple-600 hover:underline"
              >Details</a
            >
          </li>
        </ul>
      </div>
      <!-- Recent Alerts -->
      <div
        class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transform hover:-translate-y-1 transition sm:col-span-2 lg:col-span-3"
      >
        <h3 class="flex items-center text-xl font-semibold text-purple-600 mb-4">
          <span class="p-2 bg-purple-100 rounded-full mr-3"
            ><i class="fas fa-exclamation-triangle text-purple-700"></i
          ></span>
          Recent Alerts
        </h3>
        <ul class="list-disc list-inside space-y-2 text-gray-700 text-sm">
          <li>Corrective Action: Safety training overdue</li>
          <li>Upcoming Birthday: May 2</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- SNIPPET END -->
  
      </main>
    </div>
  </div>

  <!-- JS: Toggle logic for actions dropdowns, etc. -->
  <script>
    // MOBILE
    const btnMobile = document.getElementById('actionsButtonMobile');
    if (btnMobile) {
      btnMobile.addEventListener('click', (e) => {
        e.stopPropagation();
        // Toggle your dropdown if needed...
      });
    }

    // SM
    const btnSm = document.getElementById('actionsButtonSm');
    if (btnSm) {
      btnSm.addEventListener('click', (e) => {
        e.stopPropagation();
        // Toggle "actionsDropdownSm" if present
      });
    }

    // MD
    const btnMd = document.getElementById('actionsButtonMd');
    const ddMd = document.getElementById('actionsDropdownMd');
    if (btnMd && ddMd) {
      btnMd.addEventListener('click', (e) => {
        e.stopPropagation();
        ddMd.classList.toggle('hidden');
      });
    }

    // LG
    const btnLg = document.getElementById('actionsButtonLg');
    const ddLg = document.getElementById('actionsDropdownLg');
    if (btnLg && ddLg) {
      btnLg.addEventListener('click', (e) => {
        e.stopPropagation();
        ddLg.classList.toggle('hidden');
      });
    }

    // XL
    const btnXl = document.getElementById('actionsButtonXl');
    const ddXl = document.getElementById('actionsDropdownXl');
    if (btnXl && ddXl) {
      btnXl.addEventListener('click', (e) => {
        e.stopPropagation();
        ddXl.classList.toggle('hidden');
      });
    }

    // Close open dropdown(s) if clicking outside
    document.addEventListener('click', () => {
      if (ddMd) ddMd.classList.add('hidden');
      if (ddLg) ddLg.classList.add('hidden');
      if (ddXl) ddXl.classList.add('hidden');
    });

    // Resize the mobile avatar dynamically
    function resizeAvatar() {
      const content = document.getElementById('mobile-content');
      const avatar = document.getElementById('mobile-avatar');
      if (!content || !avatar) return;
      // Avatar height = 80% of content height
      const h = content.clientHeight * 0.8;
      avatar.style.width = h + 'px';
      avatar.style.height = h + 'px';
    }
    window.addEventListener('load', resizeAvatar);
    window.addEventListener('resize', resizeAvatar);
  </script>
</body>
</html>

</body>
</html>
