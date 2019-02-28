<template>
  <div>
    <form @submit.prevent="onSubmit">
      <b-row>
        <b-col xl="10">
          <b-card>
            <h3 class="card-title" slot="header">
              {{
                isNew
                  ? $t('labels.backend.schools.titles.create')
                  : $t('labels.backend.schools.titles.edit')
              }}
            </h3>
            <b-form-group
              :label="$t('validation.attributes.schoolName')"
              label-for="schoolName"
              horizontal
              :label-cols="2"
              :feedback="feedback('schoolName')"
            >
              <b-form-input
                id="schoolName"
                name="schoolName"
                required
                :placeholder="$t('validation.attributes.schoolName')"
                v-model="model.schoolName"
                :state="state('schoolName')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.schoolID')"
              label-for="schoolID"
              horizontal
              :label-cols="2"
              :feedback="feedback('schoolID')"
            >
              <b-form-input
                id="schoolID"
                name="schoolID"
                required
                :placeholder="$t('validation.attributes.schoolID')"
                v-model="model.schoolID"
                :state="state('schoolID')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.district')"
              label-for="district"
              horizontal
              :label-cols="2"
              :feedback="feedback('district')"
            >
              <b-form-input
                id="district"
                name="district"
                required
                :placeholder="$t('validation.attributes.district')"
                v-model="model.district"
                :state="state('district')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.principalName')"
              label-for="principalName"
              horizontal
              :label-cols="2"
              :feedback="feedback('principalName')"
            >
              <b-form-input
                id="principalName"
                name="principalName"
                required
                :placeholder="$t('validation.attributes.principalName')"
                v-model="model.principalName"
                :state="state('principalName')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.noOfStudents')"
              label-for="noOfStudents"
              horizontal
              :label-cols="2"
              :feedback="feedback('noOfStudents')"
            >
              <b-form-input
                id="noOfStudents"
                name="noOfStudents"
                required
                :placeholder="$t('validation.attributes.noOfStudents')"
                v-model="model.noOfStudents"
                :state="state('noOfStudents')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.noOfTeachers')"
              label-for="noOfTeachers"
              horizontal
              :label-cols="2"
              :feedback="feedback('noOfTeachers')"
            >
              <b-form-input
                id="noOfTeachers"
                name="noOfTeachers"
                required
                :placeholder="$t('validation.attributes.noOfTeachers')"
                v-model="model.noOfTeachers"
                :state="state('noOfTeachers')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.noOfClassrooms')"
              label-for="noOfClassrooms"
              horizontal
              :label-cols="2"
              :feedback="feedback('noOfClassrooms')"
            >
              <b-form-input
                id="noOfClassrooms"
                name="noOfClassrooms"
                required
                :placeholder="$t('validation.attributes.noOfClassrooms')"
                v-model="model.noOfClassrooms"
                :state="state('noOfClassrooms')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.address')"
              label-for="address"
              horizontal
              :label-cols="2"
              :feedback="feedback('address')"
            >
              <b-form-input
                id="address"
                name="address"
                required
                :placeholder="$t('validation.attributes.address')"
                v-model="model.address"
                :state="state('address')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.contactNo')"
              label-for="contactNo"
              horizontal
              :label-cols="2"
              :feedback="feedback('contactNo')"
            >
              <b-form-input
                id="contactNo"
                name="contactNo"
                required
                :placeholder="$t('validation.attributes.contactNo')"
                v-model="model.contactNo"
                :state="state('contactNo')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.schoolImage')"
              label-for="featured_image"
              horizontal
              :label-cols="2"
              :feedback="feedback('featured_image')"
            >
              <div class="media">
                <b-img-style
                  v-if="model.featured_image_url"
                  :src="model.featured_image_url"
                  :width="120"
                  :height="80"
                  rounded
                  fluid
                  class="mr-2"
                ></b-img-style>

                <div class="media-body">
                  <h6>{{ $t('labels.upload_image') }}</h6>
                  <b-form-file
                    id="featured_image"
                    name="featured_image"
                    ref="featuredImageInput"
                    :placeholder="$t('labels.no_file_chosen')"
                    v-model="model.featured_image"
                    :state="state('featured_image')"
                    v-b-tooltip.hover
                    :title="$t('labels.descriptions.allowed_image_types')"
                  ></b-form-file>
                  <a
                    href="#"
                    class="d-block mt-1"
                    v-if="model.has_featured_image || model.featured_image"
                    @click.prevent="deleteFeaturedImage"
                  >
                    {{ $t('labels.delete_image') }}
                  </a>
                </div>
              </div>
            </b-form-group>

            <b-row slot="footer">
              <b-col md>
                <b-button to="/posts" exact variant="danger" size="sm">
                  {{ $t('buttons.back') }}
                </b-button>
              </b-col>
              <b-col>
                <b-button
                  type="submit"
                  variant="success"
                  size="sm"
                  class="float-right"
                  :disabled="pending"
                  v-if="isNew || this.$app.user.can('edit schools')"
                >
                  {{ isNew ? $t('buttons.create') : $t('buttons.edit') }}
                </b-button>
              </b-col>
            </b-row>
          </b-card>
        </b-col>
      </b-row>
    </form>
  </div>
</template>

<script>
import axios from 'axios'
import form from '../mixins/form'

export default {
  name: 'SchoolForm',
  mixins: [form],
  data() {
    return {
      config: {
        wrap: true,
        time_24hr: true,
        enableTime: true
      },
      modelName: 'school',
      resourceRoute: 'schools',
      listPath: '/schools',
      tags: [],
      model: {
        schoolName: null,
        schoolID: null,
        district: null,
        principalName: null,
        noOfStudents: null,
        noOfTeachers: null,
        noOfClassrooms: null,
        address: null,
        contactNo: null,
        featured_image: null,
        featured_image_url: null,
        has_featured_image: false
      }
    }
  },
  methods: {
    async getTags(search) {
      let { data } = await axios.get(this.$app.route('admin.tags.search'), {
        params: {
          q: search
        }
      })

      this.tags = data.items
    },
    deleteFeaturedImage() {
      this.$refs.featuredImageInput.reset()
      this.model.featured_image_url = null
      this.model.has_featured_image = false
    }
  }
}
</script>
