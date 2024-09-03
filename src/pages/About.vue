<template>
 <div class="min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-white-600 text-black p-4 shadow-md">
      <div class="container mx-auto flex justify-between items-center">
          <div class="px-20">
             <h1 class="text-xl font-bold">GSO</h1>
              <a class="text-xs">General Services Office</a>
            </div>
        <nav>
          <ul class="flex space-x-4">
            <li><a href="#" class="hover:underline">Dashboard</a></li>
            <li><a href="#" class="hover:underline">Request</a></li>
            <li><a href="#" class="hover:underline">Users</a></li>
              <div>
                <button class="rounded-lg border-gray-500 w-28  justify-between">
              Admin
            </button>
              </div>
          </ul>
        </nav>
      </div>
      
      
    </header>
    <!--Search Bar-->
    

    <!-- Main Content -->
    <main class="py-8">
      <div class="container mx-auto p-1">
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
        <thead>
          <tr class="bg-[#D77E4A] border-b">
            <th class="py-3 px-20 text-left text-white font-semibold">Name</th>
            <th class="py-3 px-20 text-left text-white font-semibold">Email</th>
            <th class="py-3 px-20 text-left text-white font-semibold">Collge/office</th>
            <th class="py-3 px-20 text-left text-white font-semibold">User/Type</th>
            <th class="py-3 px-20 text-left text-white font-semibold">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(user, index) in users" :key="index" class="border-b">
            <td class="py-2 px-4">{{ user.name }}</td>
            <td class="py-2 px-4">{{ user.email }}</td>
            <td class="py-2 px-4">{{ user.college/office }}</td>
            <td class="py-2 px-4">{{ user.user/type }}</td>
            <td class="py-2 px-4">{{ user.action }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    </main>
  </div>

</template>



  
  <script>
  export default {
    name: 'About',
  };
  </script>
  
  <style>
  /* Add component-specific styles here */
  </style>