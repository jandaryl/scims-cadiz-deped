<template>
  <AppHeader fixed>
    <SidebarToggler class="d-lg-none" display="md" mobile></SidebarToggler>
    <a class="navbar-brand" :href="$app.homePath" target="_blank">
      <img
        class="navbar-brand-full"
        src="/images/AHIuanj.png"
        height="50"
        width="50"
        alt="DepEd Admin"
      />
      <img
        class="navbar-brand-minimized"
        src="/images/AHIuanj.png"
        width="30"
        height="30"
        alt="DepEd Admin"
      />
    </a>
    <SidebarToggler class="d-md-down-none" display="lg"></SidebarToggler>
    <b-navbar-nav class="ml-auto">
      <div class="inline-flex">
        <img
        class="h-10 w-10 rounded mr-4 mt-2"
        src="/images/AHIuanj.png"
        />
        <p class="text-lg text-left pt-4 mr-6">Dr. Vicente F. Gustilo Memorial National High School</p>
      </div>
      <HeaderDropdown right class="px-3 d-none d-md-block">
        <template slot="header">
          <span class="d-md-down-none">
            <i class="fe fe-plus-circle"></i>&nbsp;&nbsp;{{
              $t('labels.add_new')
            }}
          </span>
        </template>
        <template slot="dropdown">
          <b-dropdown-item
            to="/schools/create"
            v-if="this.$app.user.can('create schools')"
          >
            <i class="fe fe-book"></i>&nbsp;&nbsp;{{
              $t('labels.backend.new_menu.school')
            }}
          </b-dropdown-item>
          <b-dropdown-item
            to="/posts/create"
            v-if="this.$app.user.can('create posts')"
          >
            <i class="fe fe-file"></i>&nbsp;&nbsp;{{
              $t('labels.backend.new_menu.post')
            }}
          </b-dropdown-item>
          <b-dropdown-item
            to="/users/create"
            v-if="this.$app.user.can('create users')"
          >
            <i class="fe fe-users"></i>&nbsp;&nbsp;{{
              $t('labels.backend.new_menu.user')
            }}
          </b-dropdown-item>
          <b-dropdown-item
            to="/roles/create"
            v-if="this.$app.user.can('create roles')"
          >
            <i class="fe fe-shield"></i>&nbsp;&nbsp;{{
              $t('labels.backend.new_menu.role')
            }}
          </b-dropdown-item>
        </template>
      </HeaderDropdown>
      <HeaderDropdown
        right
        class="px-3 d-none d-md-block"
        v-if="this.$app.user.can('view reports')"
      >
        <template slot="header">
          <i class="fe fe-bar-chart-2"></i>&nbsp;&nbsp;{{ $t('labels.report') }}
        </template>
        <template slot="dropdown">
          <b-dropdown-item
            :href="$app.route('activity')"
            v-if="this.$app.user.can('view user logs')"
          >
            <i class="fe fe-activity"></i>&nbsp;&nbsp;{{
              $t('labels.backend.reports.titles.activity')
            }}
          </b-dropdown-item>
          <b-dropdown-item
            :href="$app.route('log-viewer::dashboard')"
            v-if="this.$app.user.can('view system logs')"
          >
            <i class="fe fe-file"></i>&nbsp;&nbsp;{{
              $t('labels.backend.reports.titles.log')
            }}
          </b-dropdown-item>
        </template>
      </HeaderDropdown>
      <HeaderDropdown right class="px-3">
        <template slot="header">
          <img
            :src="this.$app.user.avatar"
            class="img-avatar"
            :alt="$t('labels.user.avatar')"
          />
          <span class="d-md-down-none"> {{ this.$app.user.name }} </span>
        </template>
        <template slot="dropdown">
          <b-dropdown-item :href="$app.route('user.account')">
            <i class="fe fe-user"></i>&nbsp;&nbsp;{{
              $t('labels.user.profile')
            }}
          </b-dropdown-item>
          <b-dropdown-item :href="$app.route('admin.logout')">
            <i class="fe fe-log-out"></i>&nbsp;&nbsp;{{
              $t('labels.user.logout')
            }}
          </b-dropdown-item>
        </template>
      </HeaderDropdown>
    </b-navbar-nav>
    <div>&nbsp;&nbsp;&nbsp;&nbsp;</div>
  </AppHeader>
</template>

<script>
import AppHeader from '../../vendor/coreui/components/Header/Header'
export default {
  name: 'Header',
  components: {
    AppHeader
  }
}
</script>
