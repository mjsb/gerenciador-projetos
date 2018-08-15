<template>
	<v-app>
    	<e-header/>
    	<v-content>
			<v-container>
				<router-view/>
			</v-container>
    	</v-content>
		<v-footer app>
			<span> &copy; <a href="http://localhost:8080/sites/capem/homolog/webstack">WebStack</a> - {{ year }}</span>
		</v-footer>
  	</v-app>
</template>

<script>
	import Header from './partials/Header';

	export default {
		name: 'App',
		computed: {
			year() {
				return (new Date()).getFullYear();
			}
		},
		components: {
			'e-header': Header
		}
	}
</script>